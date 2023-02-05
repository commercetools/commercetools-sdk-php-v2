<?php

namespace Commercetools\IntegrationTest\Api\Cart;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartAddLineItemActionModel;
use Commercetools\Api\Models\Cart\CartDraft;
use Commercetools\Api\Models\Cart\CartDraftBuilder;
use Commercetools\Api\Models\Cart\CartResourceIdentifierBuilder;
use Commercetools\Api\Models\Cart\CartUpdateActionCollection;
use Commercetools\Api\Models\Cart\CartUpdateBuilder;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderFromCartDraftBuilder;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\IntegrationTest\Api\Cart\CartFixture;
use Commercetools\IntegrationTest\Api\Product\ProductFixture;
use Commercetools\IntegrationTest\Api\ProductType\ProductTypeFixture;
use Commercetools\IntegrationTest\Api\TaxCategory\TaxCategoryFixture;
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


