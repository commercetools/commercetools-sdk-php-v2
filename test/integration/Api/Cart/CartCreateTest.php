<?php

namespace Commercetools\IntegrationTest\Api\Cart;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\IntegrationTest\ApiTestCase;

class CartCreateTest extends ApiTestCase
{
    public function testCartIsCreated()
    {
        $builder = $this->getApiBuilder();

        CartFixture::withCart(
            $builder,
            function (Cart $cart) use ($builder) {
                $request = $builder->with()->carts()->withId($cart->getId())->get();
                $result = $request->execute();

                $this->assertInstanceOf(Cart::class, $result);
                $this->assertSame($cart->getId(), $result->getId());
            }
        );
    }
}
