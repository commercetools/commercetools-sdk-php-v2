<?php

namespace Commercetools\IntegrationTest\Api\Cart;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartAddLineItemActionModel;
use Commercetools\Api\Models\Cart\CartDraftBuilder;
use Commercetools\Api\Models\Cart\CartSetKeyActionModel;
use Commercetools\Api\Models\Cart\CartSetShippingAddressActionModel;
use Commercetools\Api\Models\Cart\CartUpdateActionCollection;
use Commercetools\Api\Models\Cart\CartUpdateBuilder;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Product\Product;
use Commercetools\IntegrationTest\Api\Product\ProductFixture;
use Commercetools\IntegrationTest\ApiTestCase;

class CartUpdateTest extends ApiTestCase
{
    public function testSetKey()
    {
        $builder = $this->getApiBuilder();

        CartFixture::withUpdateableCart(
            $builder,
            function (Cart $cart) use ($builder) {
                $key = CartFixture::uniqueCartString();

                $updateAction = new CartSetKeyActionModel();
                $updateAction->setKey($key);

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

                $this->assertSame($key, $cartQueryResponse->getKey());

                return $cartQueryResponse;
            }
        );
    }

    public function testAddProduct()
    {
        $builder = $this->getApiBuilder();

        ProductFixture::withPublishedProduct(
            $builder,
            function (Product $product) use ($builder) {
                CartFixture::withUpdateableCart(
                    $builder,
                    function (Cart $cart) use ($builder, $product) {
                        $updateAction = new CartAddLineItemActionModel();
                        $updateAction->setProductId($product->getId());

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

                        $this->assertInstanceOf(Cart::class, $cartQueryResponse);
                        $this->assertNotNull($cartQueryResponse->getLineItems()->current()->getId());
                        $this->assertSame($product->getId(), $cartQueryResponse->getLineItems()->current()->getProductId());

                        return $cartQueryResponse;
                    }
                );
            }
        );
    }

    public function testSetShippingAddress()
    {
        $builder = $this->getApiBuilder();
        $key = CartFixture::uniqueCartString();

        CartFixture::withUpdateableDraftCart(
            $builder,
            function (CartDraftBuilder $cartDraft) use ($key) {
                $cartDraftBuilder = CartDraftBuilder::of()
                    ->withCurrency('EUR')
                    ->withKey($key);

                return $cartDraftBuilder->build();
            },
            function (Cart $cart) use ($builder, $key) {
                $address = AddressBuilder::of()
                    ->withCountry('DE')
                    ->build();
                $updateAction = new CartSetShippingAddressActionModel();
                $updateAction->setAddress($address);

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

                $this->assertInstanceOf(Cart::class, $cartQueryResponse);
                $this->assertSame($key, $cartQueryResponse->getKey());
                $this->assertSame($address->getCountry(), $cartQueryResponse->getShippingAddress()->getCountry());

                return $cartQueryResponse;
            }
        );
    }
}
