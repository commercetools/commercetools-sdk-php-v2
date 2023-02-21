<?php

namespace Commercetools\IntegrationTest\Api\Order;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartAddLineItemActionModel;
use Commercetools\Api\Models\Cart\CartResourceIdentifierBuilder;
use Commercetools\Api\Models\Cart\CartSetShippingAddressActionModel;
use Commercetools\Api\Models\Cart\CartUpdateActionCollection;
use Commercetools\Api\Models\Cart\CartUpdateBuilder;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderFromCartDraftBuilder;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\IntegrationTest\Api\Cart\CartFixture;
use Commercetools\IntegrationTest\Api\Product\ProductFixture;
use Commercetools\IntegrationTest\ApiTestCase;
use Ramsey\Uuid\Uuid;

class OrderFixture extends ApiTestCase
{
    final public static function uniqueCartString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function withOrder(
        ApiRequestBuilder $builder,
        callable $assertFunction
    ) {
        self::withCreateOrder(
            $builder,
            $assertFunction
        );
    }

    final public static function deleteOrder(ApiRequestBuilder $builder, Order $order)
    {
        $request = $builder
            ->with()
            ->orders()
            ->withId($order->getId())
            ->delete()
            ->withVersion($order->getVersion());

        return $request->execute();
    }

    final public static function withCreateOrder(
        ApiRequestBuilder $builder,
        callable $assertFunction
    ) {
        ProductFixture::withPublishedProduct(
            $builder,
            function (Product $product) use ($builder, $assertFunction) {
                CartFixture::withUpdateableCart(
                    $builder,
                    function (Cart $cart) use ($builder, $assertFunction, $product) {
                        $address = AddressBuilder::of()
                            ->withCountry('DE')
                            ->build();
                        $updateAction1 = new CartAddLineItemActionModel();
                        $updateAction1->setProductId($product->getId());

                        $updateAction2 = new CartSetShippingAddressActionModel();
                        $updateAction2->setAddress($address);

                        $updateActionCollection = new CartUpdateActionCollection();
                        $updateActionCollection->add($updateAction1)->add($updateAction2);
                        $cartUpdate = CartUpdateBuilder::of()
                            ->withVersion($cart->getVersion())
                            ->withActions($updateActionCollection)
                            ->build();
                        $request = $builder
                            ->with()
                            ->carts()
                            ->withId($cart->getId())
                            ->post($cartUpdate);
                        $cartQueryResponse = $request->execute();

                        $orderCartDraft = OrderFromCartDraftBuilder::of()
                            ->withCart(
                                CartResourceIdentifierBuilder::of()
                                    ->withId($cartQueryResponse->getId())
                                    ->build()
                            )
                            ->withVersion($cartQueryResponse->getVersion())
                            ->build();

                        $orderResponse = $builder->with()->orders()->post($orderCartDraft)->execute();

                        try {
                            call_user_func($assertFunction, $orderResponse);
                            return $builder
                                ->with()
                                ->carts()
                                ->withId($cartQueryResponse->getId())
                                ->get()
                                ->execute();
                        } finally {
                            OrderFixture::deleteOrder($builder, $orderResponse);
                        }
                    }
                );
            }
        );
    }
}
