<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request\Test;

use Commercetools\Request\RequestBuilder;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\CartDiscount\CartDiscountDraft;
use Commercetools\Types\Cart\CartDraft;
use Commercetools\Types\Category\CategoryDraft;
use Commercetools\Types\Channel\ChannelDraft;
use Commercetools\Types\CustomerGroup\CustomerGroupDraft;
use Commercetools\Types\Customer\CustomerDraft;
use Commercetools\Types\DiscountCode\DiscountCodeDraft;
use Commercetools\Types\Extension\ExtensionDraft;
use Commercetools\Types\Inventory\InventoryEntryDraft;
use Commercetools\Types\Order\OrderFromCartDraft;
use Commercetools\Types\Payment\PaymentDraft;
use Commercetools\Types\ProductDiscount\ProductDiscountDraft;
use Commercetools\Types\ProductType\ProductTypeDraft;
use Commercetools\Types\Product\ProductDraft;
use Commercetools\Types\Review\ReviewDraft;
use Commercetools\Types\ShippingMethod\ShippingMethodDraft;
use Commercetools\Types\ShoppingList\ShoppingListDraft;
use Commercetools\Types\State\StateDraft;
use Commercetools\Types\Subscription\SubscriptionDraft;
use Commercetools\Types\TaxCategory\TaxCategoryDraft;
use Commercetools\Types\Type\TypeDraft;
use Commercetools\Types\Zone\ZoneDraft;


class RequestCreateBuilderTest extends TestCase
{
    public function getRequests()
    {
        return [
            'create_CartDiscountDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->create(function($draft) {
                        static::assertInstanceOf(CartDiscountDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/cart-discounts',
            ],
            'create_CartDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->create(function($draft) {
                        static::assertInstanceOf(CartDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/carts',
            ],
            'create_CategoryDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->create(function($draft) {
                        static::assertInstanceOf(CategoryDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/categories',
            ],
            'create_ChannelDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->create(function($draft) {
                        static::assertInstanceOf(ChannelDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/channels',
            ],
            'create_CustomerGroupDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->create(function($draft) {
                        static::assertInstanceOf(CustomerGroupDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/customer-groups',
            ],
            'create_CustomerDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->create(function($draft) {
                        static::assertInstanceOf(CustomerDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/customers',
            ],
            'create_DiscountCodeDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->create(function($draft) {
                        static::assertInstanceOf(DiscountCodeDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/discount-codes',
            ],
            'create_ExtensionDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->create(function($draft) {
                        static::assertInstanceOf(ExtensionDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/extensions',
            ],
            'create_InventoryEntryDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->create(function($draft) {
                        static::assertInstanceOf(InventoryEntryDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/inventory',
            ],
            'create_OrderFromCartDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->create(function($draft) {
                        static::assertInstanceOf(OrderFromCartDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/orders',
            ],
            'create_PaymentDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->create(function($draft) {
                        static::assertInstanceOf(PaymentDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/payments',
            ],
            'create_ProductDiscountDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->create(function($draft) {
                        static::assertInstanceOf(ProductDiscountDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/product-discounts',
            ],
            'create_ProductTypeDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->create(function($draft) {
                        static::assertInstanceOf(ProductTypeDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/product-types',
            ],
            'create_ProductDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->create(function($draft) {
                        static::assertInstanceOf(ProductDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/products',
            ],
            'create_ReviewDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->create(function($draft) {
                        static::assertInstanceOf(ReviewDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/reviews',
            ],
            'create_ShippingMethodDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->create(function($draft) {
                        static::assertInstanceOf(ShippingMethodDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/shipping-methods',
            ],
            'create_ShoppingListDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->create(function($draft) {
                        static::assertInstanceOf(ShoppingListDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/shopping-lists',
            ],
            'create_StateDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->create(function($draft) {
                        static::assertInstanceOf(StateDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/states',
            ],
            'create_SubscriptionDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->create(function($draft) {
                        static::assertInstanceOf(SubscriptionDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/subscriptions',
            ],
            'create_TaxCategoryDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->create(function($draft) {
                        static::assertInstanceOf(TaxCategoryDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/tax-categories',
            ],
            'create_TypeDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->create(function($draft) {
                        static::assertInstanceOf(TypeDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/types',
            ],
            'create_ZoneDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->create(function($draft) {
                        static::assertInstanceOf(ZoneDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/zones',
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new RequestBuilder();
        $request = $builderFunction($builder);

        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertContains(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}