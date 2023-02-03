<?php

namespace Commercetools\IntegrationTest\Api\Cart;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartSetKeyActionModel;
use Commercetools\Api\Models\Cart\CartUpdateActionCollection;
use Commercetools\Api\Models\Cart\CartUpdateBuilder;
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

}
