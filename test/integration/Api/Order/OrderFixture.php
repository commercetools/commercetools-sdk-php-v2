<?php

namespace Commercetools\IntegrationTest\Api\Order;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartDraftBuilder;
use Commercetools\Api\Models\Cart\CartRecalculateActionBuilder;
use Commercetools\Api\Models\Cart\CartResourceIdentifierBuilder;
use Commercetools\Api\Models\Cart\CartUpdateActionCollection;
use Commercetools\Api\Models\Cart\CartUpdateBuilder;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderFromCartDraft;
use Commercetools\Api\Models\Order\OrderFromCartDraftBuilder;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\Exception\BadRequestException;
use Commercetools\IntegrationTest\Api\Cart\CartFixture;
use Commercetools\IntegrationTest\Api\Product\ProductFixture;
use Ramsey\Uuid\Uuid;

class Bla
{
    final public static function uniqueOrderString()
    {
        return 'test-' . Uuid::uuid4();
    }

    final public static function defaultCartDraftBuilderFunction(CartDraftBuilder $builder)
    {
        return $builder;
    }

//    final public static function defaultOrderFromCartBuilderFunction(OrderFromCartDraftBuilder $builder)
//    {
//        return $builder;
//    }

    final public static function defaultOrderFromCartDraftFunction(Cart $cart): OrderFromCartDraftBuilder
    {
        $builder = OrderFromCartDraftBuilder::of();
        $builder
            ->withCart(
                CartResourceIdentifierBuilder::of()
                    ->withId($cart->getId())
                    ->build()
            )
            ->withVersion($cart->getVersion());

        return $builder;
    }

    final public static function defaultOrderFromCartDraftBuilderFunction(OrderFromCartDraftBuilder $draftBuilder): OrderFromCartDraft
    {
        return $draftBuilder->build();
    }

    final public static function defaultOrderCreateFunction(ApiRequestBuilder $builder, OrderFromCartDraftBuilder $draft)
    {
        $request = $builder->with()->orders()->post($draft->build());

        return $request->execute();
    }

    final public static function defaultOrderDeleteFunction(ApiRequestBuilder $builder, Order $resource)
    {
        $request = $builder
            ->with()
            ->orders()
            ->withId($resource->getId())
            ->delete()
            ->withVersion($resource->getVersion());

        return $request->execute();
    }

    final public static function withUpdateableCartDraftOrder(
        ApiRequestBuilder $builder,
        callable          $cartDraftBuilderFunction,
        callable          $orderRequestBuilderFunction,
        callable          $assertFunction,
        callable          $createFunction = null,
        callable          $deleteFunction = null,
        callable          $orderRequestDraftFunction = null
    )
    {
        self::withOrderResource(
            $builder,
            function ($builder, $deleteFunction, $assertFunction, $resource, $customer, $product, $cart) {
                $updatedResource = null;
                try {
                    $updatedResource = call_user_func($assertFunction, $resource, $customer, $product, $cart);
                } finally {
                    call_user_func($deleteFunction, $builder, $updatedResource != null ? $updatedResource : $resource);
                }
            },
            $cartDraftBuilderFunction,
            $orderRequestBuilderFunction,
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $orderRequestDraftFunction
        );
    }

    final public static function withCartDraftOrder(
        ApiRequestBuilder $builder,
        callable          $cartDraftBuilderFunction,
        callable          $orderFromCartBuilderFunction,
        callable          $assertFunction,
        callable          $createFunction = null,
        callable          $deleteFunction = null,
        callable          $orderDraftFunction = null
    )
    {
        self::withOrderResource(
            $builder,
            function ($builder, $deleteFunction, $assertFunction, $resource, $customer, $product, $cart) {
                try {
                    call_user_func($assertFunction, $resource, $customer, $product, $cart);
                } finally {
                    call_user_func($deleteFunction, $builder, $resource);
                }
            },
            $cartDraftBuilderFunction,
            $orderFromCartBuilderFunction,
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $orderDraftFunction
        );
    }

    final public static function withUpdateableOrder(
        ApiRequestBuilder $builder,
        callable          $assertFunction,
        callable          $createFunction = null,
        callable          $deleteFunction = null,
        callable          $orderDraftFunction = null
    )
    {
        self::withUpdateableCartDraftOrder(
            $builder,
            [__CLASS__, 'defaultCartDraftBuilderFunction'],
//            [__CLASS__, 'defaultOrderFromCartBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $orderDraftFunction
        );
    }

    final public static function withUpdateableDraftOrder(
        ApiRequestBuilder $builder,
        callable          $orderFromCartBuilderFunction,
        callable          $assertFunction,
        callable          $createFunction = null,
        callable          $deleteFunction = null,
        callable          $orderDraftFunction = null
    )
    {
        self::withUpdateableCartDraftOrder(
            $builder,
            [__CLASS__, 'defaultCartDraftBuilderFunction'],
            $orderFromCartBuilderFunction,
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $orderDraftFunction
        );
    }

    final public static function withOrder(
        ApiRequestBuilder $builder,
        callable          $assertFunction,
        callable          $createFunction = null,
        callable          $deleteFunction = null,
        callable          $orderDraftFunction = null
    )
    {
        self::withCartDraftOrder(
            $builder,
            [__CLASS__, 'defaultCartDraftBuilderFunction'],
//            [__CLASS__, 'defaultOrderFromCartBuilderFunction'],
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $orderDraftFunction
        );
    }

    final public static function withDraftOrder(
        ApiRequestBuilder $builder,
        callable          $orderFromCartBuilderFunction,
        callable          $assertFunction,
        callable          $createFunction = null,
        callable          $deleteFunction = null,
        callable          $orderDraftFunction = null
    )
    {
        self::withCartDraftOrder(
            $builder,
            [__CLASS__, 'defaultCartDraftBuilderFunction'],
            $orderFromCartBuilderFunction,
            $assertFunction,
            $createFunction,
            $deleteFunction,
            $orderDraftFunction
        );
    }

    private static function withOrderResource(
        ApiRequestBuilder $builder,
        callable          $fixtureFunction,
        callable          $cartDraftBuilderFunction,
//        callable          $orderFromCartBuilderFunction,
        callable          $assertFunction,
        callable          $createFunction = null,
        callable          $deleteFunction = null,
        callable          $orderDraftFunction = null
    )
    {
        ProductFixture::withPublishedProduct(
            $builder,
            function (Product $product) use (
                $builder,
                $cartDraftBuilderFunction,
//                $orderFromCartBuilderFunction,
                $assertFunction,
                $createFunction,
                $deleteFunction,
                $orderDraftFunction,
                $fixtureFunction
            ) {
                CartFixture::withUpdateableDraftCart(
                    $builder,
                    $cartDraftBuilderFunction,
                    function (Cart $cart) use (
                        $builder,
//                        $orderFromCartBuilderFunction,
                        $assertFunction,
                        $createFunction,
                        $deleteFunction,
                        $orderDraftFunction,
                        $product,
                        $fixtureFunction
                    ) {
                        if ($orderDraftFunction == null) {
                            $orderDraftFunction = [__CLASS__, 'defaultOrderFromCartDraftFunction'];
                        }
                        if ($createFunction == null) {
                            $createFunction = [__CLASS__, 'defaultOrderCreateFunction'];
                        }
                        if ($deleteFunction == null) {
                            $deleteFunction = [__CLASS__, 'defaultOrderDeleteFunction'];
                        }

                        $orderFromCartDraftRequest = call_user_func($orderDraftFunction, $cart);

                        $orderFromCartRequest = call_user_func($orderFromCartDraftRequest);
//                        $orderFromCartRequest = call_user_func($orderFromCartBuilderFunction, $orderFromCartDraftRequest);

                        try {
                            $resource = $createFunction($builder, $orderFromCartRequest);
                        } catch (BadRequestException $e) {
                            $updateAction = new CartRecalculateActionBuilder();

                            $updateActionCollection = new CartUpdateActionCollection();
                            $updateActionCollection->add($updateAction);
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

                            $orderFromCartDraftRequest = call_user_func($orderDraftFunction, $cartQueryResponse);
//                            $orderFromCartRequest = call_user_func($orderFromCartBuilderFunction, $orderFromCartDraftRequest);
                            $orderFromCartRequest = call_user_func( $orderFromCartDraftRequest);
                            $resource = $createFunction($builder, $orderFromCartRequest);
                        }

                        $fixtureFunction($builder, $deleteFunction, $assertFunction, $resource, $product, $cart);

                        return $cart;
                    }
                );
            }
        );
    }
}
