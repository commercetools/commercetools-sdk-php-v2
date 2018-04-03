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
use Commercetools\Types\Project\ProjectModel;
use Commercetools\Types\Category\CategoryModel;
use Commercetools\Types\Cart\CartModel;
use Commercetools\Types\CartDiscount\CartDiscountModel;
use Commercetools\Types\Channel\ChannelModel;
use Commercetools\Types\Customer\CustomerModel;
use Commercetools\Types\CustomerGroup\CustomerGroupModel;
use Commercetools\Types\DiscountCode\DiscountCodeModel;
use Commercetools\Types\Inventory\InventoryEntryModel;
use Commercetools\Types\Order\OrderModel;
use Commercetools\Types\Payment\PaymentModel;
use Commercetools\Types\Product\ProductModel;
use Commercetools\Types\ProductDiscount\ProductDiscountModel;
use Commercetools\Types\ProductType\ProductTypeModel;
use Commercetools\Types\Review\ReviewModel;
use Commercetools\Types\ShippingMethod\ShippingMethodModel;
use Commercetools\Types\ShoppingList\ShoppingListModel;
use Commercetools\Types\State\StateModel;
use Commercetools\Types\Subscription\SubscriptionModel;
use Commercetools\Types\TaxCategory\TaxCategoryModel;
use Commercetools\Types\Type\TypeModel;
use Commercetools\Types\Zone\ZoneModel;
use Commercetools\Types\Extension\ExtensionModel;


class RequestUpdateBuilderTest extends TestCase
{
    public function getRequests()
    {
        return [
            'update_Project' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->update(new ProjectModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}',
                '{"version": 1, "actions": []}'
            ],
            'update_CartDiscount' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->update(new CartDiscountModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/cart-discounts/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Cart' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->update(new CartModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/carts/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Category' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->update(new CategoryModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/categories/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Channel' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->update(new ChannelModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/channels/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_CustomerGroup' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->update(new CustomerGroupModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/customer-groups/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Customer' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->update(new CustomerModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/customers/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_DiscountCode' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->update(new DiscountCodeModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/discount-codes/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Extension' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->update(new ExtensionModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/extensions/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_InventoryEntry' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->update(new InventoryEntryModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/inventory/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Order' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->update(new OrderModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/orders/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Payment' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->update(new PaymentModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/payments/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_ProductDiscount' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->update(new ProductDiscountModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/product-discounts/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_ProductType' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->update(new ProductTypeModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/product-types/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Product' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->update(new ProductModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/products/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Review' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->update(new ReviewModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/reviews/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_ShippingMethod' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->update(new ShippingMethodModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/shipping-methods/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_ShoppingList' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->update(new ShoppingListModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/shopping-lists/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_State' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->update(new StateModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/states/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Subscription' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->update(new SubscriptionModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/subscriptions/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_TaxCategory' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->update(new TaxCategoryModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/tax-categories/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Type' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->update(new TypeModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/types/{ID}',
                '{"version": 1, "actions": []}'
            ],
            'update_Zone' => [
                function(RequestBuilder $builder): ?RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->update(new ZoneModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/zones/{ID}',
                '{"version": 1, "actions": []}'
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