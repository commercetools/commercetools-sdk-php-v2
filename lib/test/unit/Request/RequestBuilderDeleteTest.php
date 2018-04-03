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
use Commercetools\Types\CartDiscount\CartDiscount;
use Commercetools\Types\Cart\Cart;
use Commercetools\Types\Category\Category;
use Commercetools\Types\Channel\Channel;
use Commercetools\Types\CustomerGroup\CustomerGroup;
use Commercetools\Types\Customer\Customer;
use Commercetools\Types\DiscountCode\DiscountCode;
use Commercetools\Types\Extension\Extension;
use Commercetools\Types\Inventory\InventoryEntry;
use Commercetools\Types\Order\Order;
use Commercetools\Types\Payment\Payment;
use Commercetools\Types\ProductDiscount\ProductDiscount;
use Commercetools\Types\ProductType\ProductType;
use Commercetools\Types\Product\Product;
use Commercetools\Types\Review\Review;
use Commercetools\Types\ShippingMethod\ShippingMethod;
use Commercetools\Types\ShoppingList\ShoppingList;
use Commercetools\Types\State\State;
use Commercetools\Types\Subscription\Subscription;
use Commercetools\Types\TaxCategory\TaxCategory;
use Commercetools\Types\Type\Type;
use Commercetools\Types\Zone\Zone;

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


class RequestBuilderDeleteTest extends TestCase
{
    public function getRequests()
    {
        return [
            'delete_CartDiscount' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->delete(new CartDiscountModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/cart-discounts/{ID}?version=1',
            ],
            'delete_Cart' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->delete(new CartModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/carts/{ID}?version=1',
            ],
            'delete_Category' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->delete(new CategoryModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/categories/{ID}?version=1',
            ],
            'delete_Channel' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->delete(new ChannelModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/channels/{ID}?version=1',
            ],
            'delete_CustomerGroup' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->delete(new CustomerGroupModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/customer-groups/{ID}?version=1',
            ],
            'delete_Customer' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->delete(new CustomerModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/customers/{ID}?version=1',
            ],
            'delete_DiscountCode' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->delete(new DiscountCodeModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/discount-codes/{ID}?version=1',
            ],
            'delete_Extension' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->delete(new ExtensionModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/extensions/{ID}?version=1',
            ],
            'delete_InventoryEntry' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->delete(new InventoryEntryModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/inventory/{ID}?version=1',
            ],
            'delete_Order' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->delete(new OrderModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/orders/{ID}?version=1',
            ],
            'delete_Payment' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->delete(new PaymentModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/payments/{ID}?version=1',
            ],
            'delete_ProductDiscount' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->delete(new ProductDiscountModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/product-discounts/{ID}?version=1',
            ],
            'delete_ProductType' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->delete(new ProductTypeModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/product-types/{ID}?version=1',
            ],
            'delete_Product' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->delete(new ProductModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/products/{ID}?version=1',
            ],
            'delete_Review' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->delete(new ReviewModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/reviews/{ID}?version=1',
            ],
            'delete_ShippingMethod' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->delete(new ShippingMethodModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/shipping-methods/{ID}?version=1',
            ],
            'delete_ShoppingList' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->delete(new ShoppingListModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/shopping-lists/{ID}?version=1',
            ],
            'delete_State' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->delete(new StateModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/states/{ID}?version=1',
            ],
            'delete_Subscription' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->delete(new SubscriptionModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/subscriptions/{ID}?version=1',
            ],
            'delete_TaxCategory' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->delete(new TaxCategoryModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/tax-categories/{ID}?version=1',
            ],
            'delete_Type' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->delete(new TypeModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/types/{ID}?version=1',
            ],
            'delete_Zone' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->delete(new ZoneModel(['id' => 'ID', 'version' => 1]));
                },
                'delete',
                '/{projectKey}/zones/{ID}?version=1',
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