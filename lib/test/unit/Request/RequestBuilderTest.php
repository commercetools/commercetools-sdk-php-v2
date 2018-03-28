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

use Commercetools\Types\Cart\CartModel;
use Commercetools\Types\CartDiscount\CartDiscountModel;
use Commercetools\Types\Category\CategoryModel;
use Commercetools\Types\Channel\ChannelModel;
use Commercetools\Types\Customer\CustomerModel;
use Commercetools\Types\CustomerGroup\CustomerGroupModel;
use Commercetools\Types\DiscountCode\DiscountCodeModel;
use Commercetools\Types\Extension\ExtensionModel;
use Commercetools\Types\Inventory\InventoryEntryModel;
use Commercetools\Types\Order\OrderModel;
use Commercetools\Types\Payment\PaymentModel;
use Commercetools\Types\Product\ProductModel;
use Commercetools\Types\ProductDiscount\ProductDiscountModel;
use Commercetools\Types\ProductType\ProductTypeModel;
use Commercetools\Types\Project\ProjectModel;
use Commercetools\Types\Review\ReviewModel;
use Commercetools\Types\ShippingMethod\ShippingMethodModel;
use Commercetools\Types\ShoppingList\ShoppingListModel;
use Commercetools\Types\State\StateModel;
use Commercetools\Types\Subscription\SubscriptionModel;
use Commercetools\Types\TaxCategory\TaxCategoryModel;
use Commercetools\Types\Type\TypeModel;
use Commercetools\Types\Zone\ZoneModel;


class RequestBuilderTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->get();
                },
                'get',
                '/{projectKey}',
            ], 
            'ByProjectKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->post(null);
                },
                'post',
                '/{projectKey}',
            ], 
            'ByProjectKeyCartDiscountsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->get();
                },
                'get',
                '/{projectKey}/cart-discounts',
            ], 
            'ByProjectKeyCartDiscountsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->post(null);
                },
                'post',
                '/{projectKey}/cart-discounts',
            ], 
            'ByProjectKeyCartDiscountsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/cart-discounts/{ID}',
            ], 
            'ByProjectKeyCartDiscountsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/cart-discounts/{ID}',
            ], 
            'ByProjectKeyCartDiscountsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/cart-discounts/{ID}',
            ], 
            'ByProjectKeyCartsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->get();
                },
                'get',
                '/{projectKey}/carts',
            ], 
            'ByProjectKeyCartsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->post(null);
                },
                'post',
                '/{projectKey}/carts',
            ], 
            'ByProjectKeyCartsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/carts/{ID}',
            ], 
            'ByProjectKeyCartsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/carts/{ID}',
            ], 
            'ByProjectKeyCartsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/carts/{ID}',
            ], 
            'ByProjectKeyCategoriesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->get();
                },
                'get',
                '/{projectKey}/categories',
            ], 
            'ByProjectKeyCategoriesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->post(null);
                },
                'post',
                '/{projectKey}/categories',
            ], 
            'ByProjectKeyCategoriesKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/categories/key={key}',
            ], 
            'ByProjectKeyCategoriesKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withKey('key')->post(null);
                },
                'post',
                '/{projectKey}/categories/key={key}',
            ], 
            'ByProjectKeyCategoriesKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withKey('key')->delete();
                },
                'delete',
                '/{projectKey}/categories/key={key}',
            ], 
            'ByProjectKeyCategoriesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/categories/{ID}',
            ], 
            'ByProjectKeyCategoriesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/categories/{ID}',
            ], 
            'ByProjectKeyCategoriesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/categories/{ID}',
            ], 
            'ByProjectKeyChannelsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->get();
                },
                'get',
                '/{projectKey}/channels',
            ], 
            'ByProjectKeyChannelsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->post(null);
                },
                'post',
                '/{projectKey}/channels',
            ], 
            'ByProjectKeyChannelsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/channels/{ID}',
            ], 
            'ByProjectKeyChannelsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/channels/{ID}',
            ], 
            'ByProjectKeyChannelsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/channels/{ID}',
            ], 
            'ByProjectKeyCustomObjectsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->get();
                },
                'get',
                '/{projectKey}/custom-objects',
            ], 
            'ByProjectKeyCustomObjectsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->post(null);
                },
                'post',
                '/{projectKey}/custom-objects',
            ], 
            'ByProjectKeyCustomObjectsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/custom-objects/{ID}',
            ], 
            'ByProjectKeyCustomObjectsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/custom-objects/{ID}',
            ], 
            'ByProjectKeyCustomObjectsByContainerByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withContainerAndKey('container', 'key')->get();
                },
                'get',
                '/{projectKey}/custom-objects/{container}/{key}',
            ], 
            'ByProjectKeyCustomObjectsByContainerByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withContainerAndKey('container', 'key')->delete();
                },
                'delete',
                '/{projectKey}/custom-objects/{container}/{key}',
            ], 
            'ByProjectKeyCustomerGroupsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->get();
                },
                'get',
                '/{projectKey}/customer-groups',
            ], 
            'ByProjectKeyCustomerGroupsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->post(null);
                },
                'post',
                '/{projectKey}/customer-groups',
            ], 
            'ByProjectKeyCustomerGroupsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/customer-groups/key={key}',
            ], 
            'ByProjectKeyCustomerGroupsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withKey('key')->post(null);
                },
                'post',
                '/{projectKey}/customer-groups/key={key}',
            ], 
            'ByProjectKeyCustomerGroupsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withKey('key')->delete();
                },
                'delete',
                '/{projectKey}/customer-groups/key={key}',
            ], 
            'ByProjectKeyCustomerGroupsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/customer-groups/{ID}',
            ], 
            'ByProjectKeyCustomerGroupsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/customer-groups/{ID}',
            ], 
            'ByProjectKeyCustomerGroupsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/customer-groups/{ID}',
            ], 
            'ByProjectKeyCustomersGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->get();
                },
                'get',
                '/{projectKey}/customers',
            ], 
            'ByProjectKeyCustomersPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->post(null);
                },
                'post',
                '/{projectKey}/customers',
            ], 
            'ByProjectKeyCustomersEmailTokenPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->emailToken()->post(null);
                },
                'post',
                '/{projectKey}/customers/email-token',
            ], 
            'ByProjectKeyCustomersEmailTokenByEmailTokenGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withEmailToken('emailToken')->get();
                },
                'get',
                '/{projectKey}/customers/email-token={emailToken}',
            ], 
            'ByProjectKeyCustomersEmailConfirmPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->email()->confirm()->post(null);
                },
                'post',
                '/{projectKey}/customers/email/confirm',
            ], 
            'ByProjectKeyCustomersPasswordPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->password()->post(null);
                },
                'post',
                '/{projectKey}/customers/password',
            ], 
            'ByProjectKeyCustomersPasswordTokenPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->passwordToken()->post(null);
                },
                'post',
                '/{projectKey}/customers/password-token',
            ], 
            'ByProjectKeyCustomersPasswordTokenByPasswordTokenGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withPasswordToken('passwordToken')->get();
                },
                'get',
                '/{projectKey}/customers/password-token={passwordToken}',
            ], 
            'ByProjectKeyCustomersPasswordResetPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->password()->reset()->post(null);
                },
                'post',
                '/{projectKey}/customers/password/reset',
            ], 
            'ByProjectKeyCustomersByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/customers/{ID}',
            ], 
            'ByProjectKeyCustomersByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/customers/{ID}',
            ], 
            'ByProjectKeyCustomersByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/customers/{ID}',
            ], 
            'ByProjectKeyDiscountCodesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->get();
                },
                'get',
                '/{projectKey}/discount-codes',
            ], 
            'ByProjectKeyDiscountCodesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->post(null);
                },
                'post',
                '/{projectKey}/discount-codes',
            ], 
            'ByProjectKeyDiscountCodesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/discount-codes/{ID}',
            ], 
            'ByProjectKeyDiscountCodesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/discount-codes/{ID}',
            ], 
            'ByProjectKeyDiscountCodesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/discount-codes/{ID}',
            ], 
            'ByProjectKeyExtensionsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->get();
                },
                'get',
                '/{projectKey}/extensions',
            ], 
            'ByProjectKeyExtensionsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->post(null);
                },
                'post',
                '/{projectKey}/extensions',
            ], 
            'ByProjectKeyExtensionsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/extensions/key={key}',
            ], 
            'ByProjectKeyExtensionsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withKey('key')->post(null);
                },
                'post',
                '/{projectKey}/extensions/key={key}',
            ], 
            'ByProjectKeyExtensionsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withKey('key')->delete();
                },
                'delete',
                '/{projectKey}/extensions/key={key}',
            ], 
            'ByProjectKeyExtensionsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/extensions/{ID}',
            ], 
            'ByProjectKeyExtensionsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/extensions/{ID}',
            ], 
            'ByProjectKeyExtensionsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/extensions/{ID}',
            ], 
            'ByProjectKeyGraphqlPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->graphql()->post();
                },
                'post',
                '/{projectKey}/graphql',
            ], 
            'ByProjectKeyInventoryGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->get();
                },
                'get',
                '/{projectKey}/inventory',
            ], 
            'ByProjectKeyInventoryPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->post(null);
                },
                'post',
                '/{projectKey}/inventory',
            ], 
            'ByProjectKeyInventoryByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/inventory/{ID}',
            ], 
            'ByProjectKeyInventoryByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/inventory/{ID}',
            ], 
            'ByProjectKeyInventoryByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/inventory/{ID}',
            ], 
            'ByProjectKeyLoginPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->login()->post(null);
                },
                'post',
                '/{projectKey}/login',
            ], 
            'ByProjectKeyMeGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->get();
                },
                'get',
                '/{projectKey}/me',
            ], 
            'ByProjectKeyMePost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->post(null);
                },
                'post',
                '/{projectKey}/me',
            ], 
            'ByProjectKeyMeDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->delete();
                },
                'delete',
                '/{projectKey}/me',
            ], 
            'ByProjectKeyMeActiveCartGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->activeCart()->get();
                },
                'get',
                '/{projectKey}/me/active-cart',
            ], 
            'ByProjectKeyMeCartsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->get();
                },
                'get',
                '/{projectKey}/me/carts',
            ], 
            'ByProjectKeyMeCartsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->post(null);
                },
                'post',
                '/{projectKey}/me/carts',
            ], 
            'ByProjectKeyMeCartsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/me/carts/{ID}',
            ], 
            'ByProjectKeyMeCartsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/me/carts/{ID}',
            ], 
            'ByProjectKeyMeCartsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/me/carts/{ID}',
            ], 
            'ByProjectKeyMeEmailConfirmPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->email()->confirm()->post();
                },
                'post',
                '/{projectKey}/me/email/confirm',
            ], 
            'ByProjectKeyMeLoginPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->login()->post();
                },
                'post',
                '/{projectKey}/me/login',
            ], 
            'ByProjectKeyMeOrdersGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->get();
                },
                'get',
                '/{projectKey}/me/orders',
            ], 
            'ByProjectKeyMeOrdersPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->post(null);
                },
                'post',
                '/{projectKey}/me/orders',
            ], 
            'ByProjectKeyMeOrdersByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/me/orders/{ID}',
            ], 
            'ByProjectKeyMeOrdersByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/me/orders/{ID}',
            ], 
            'ByProjectKeyMePasswordPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->password()->post();
                },
                'post',
                '/{projectKey}/me/password',
            ], 
            'ByProjectKeyMePasswordResetPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->password()->reset()->post();
                },
                'post',
                '/{projectKey}/me/password/reset',
            ], 
            'ByProjectKeyMeSignupPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->signup()->post(null);
                },
                'post',
                '/{projectKey}/me/signup',
            ], 
            'ByProjectKeyMessagesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->messages()->get();
                },
                'get',
                '/{projectKey}/messages',
            ], 
            'ByProjectKeyMessagesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->messages()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/messages/{ID}',
            ], 
            'ByProjectKeyOrdersGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->get();
                },
                'get',
                '/{projectKey}/orders',
            ], 
            'ByProjectKeyOrdersPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->post(null);
                },
                'post',
                '/{projectKey}/orders',
            ], 
            'ByProjectKeyOrdersImportPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->import()->post(null);
                },
                'post',
                '/{projectKey}/orders/import',
            ], 
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withOrderNumber('orderNumber')->get();
                },
                'get',
                '/{projectKey}/orders/order-number={orderNumber}',
            ], 
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withOrderNumber('orderNumber')->post(null);
                },
                'post',
                '/{projectKey}/orders/order-number={orderNumber}',
            ], 
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withOrderNumber('orderNumber')->delete();
                },
                'delete',
                '/{projectKey}/orders/order-number={orderNumber}',
            ], 
            'ByProjectKeyOrdersByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/orders/{ID}',
            ], 
            'ByProjectKeyOrdersByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/orders/{ID}',
            ], 
            'ByProjectKeyOrdersByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/orders/{ID}',
            ], 
            'ByProjectKeyPaymentsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->get();
                },
                'get',
                '/{projectKey}/payments',
            ], 
            'ByProjectKeyPaymentsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->post(null);
                },
                'post',
                '/{projectKey}/payments',
            ], 
            'ByProjectKeyPaymentsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/payments/key={key}',
            ], 
            'ByProjectKeyPaymentsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withKey('key')->post(null);
                },
                'post',
                '/{projectKey}/payments/key={key}',
            ], 
            'ByProjectKeyPaymentsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withKey('key')->delete();
                },
                'delete',
                '/{projectKey}/payments/key={key}',
            ], 
            'ByProjectKeyPaymentsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/payments/{ID}',
            ], 
            'ByProjectKeyPaymentsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/payments/{ID}',
            ], 
            'ByProjectKeyPaymentsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/payments/{ID}',
            ], 
            'ByProjectKeyProductDiscountsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->get();
                },
                'get',
                '/{projectKey}/product-discounts',
            ], 
            'ByProjectKeyProductDiscountsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->post(null);
                },
                'post',
                '/{projectKey}/product-discounts',
            ], 
            'ByProjectKeyProductDiscountsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/product-discounts/{ID}',
            ], 
            'ByProjectKeyProductDiscountsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/product-discounts/{ID}',
            ], 
            'ByProjectKeyProductDiscountsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/product-discounts/{ID}',
            ], 
            'ByProjectKeyProductProjectionsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->get();
                },
                'get',
                '/{projectKey}/product-projections',
            ], 
            'ByProjectKeyProductProjectionsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/product-projections/key={key}',
            ], 
            'ByProjectKeyProductProjectionsSearchPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->search()->post();
                },
                'post',
                '/{projectKey}/product-projections/search',
            ], 
            'ByProjectKeyProductProjectionsSearchGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->search()->get();
                },
                'get',
                '/{projectKey}/product-projections/search',
            ], 
            'ByProjectKeyProductProjectionsSuggestGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->suggest()->get();
                },
                'get',
                '/{projectKey}/product-projections/suggest',
            ], 
            'ByProjectKeyProductProjectionsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/product-projections/{ID}',
            ], 
            'ByProjectKeyProductTypesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->get();
                },
                'get',
                '/{projectKey}/product-types',
            ], 
            'ByProjectKeyProductTypesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->post(null);
                },
                'post',
                '/{projectKey}/product-types',
            ], 
            'ByProjectKeyProductTypesKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/product-types/key={key}',
            ], 
            'ByProjectKeyProductTypesKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withKey('key')->post(null);
                },
                'post',
                '/{projectKey}/product-types/key={key}',
            ], 
            'ByProjectKeyProductTypesKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withKey('key')->delete();
                },
                'delete',
                '/{projectKey}/product-types/key={key}',
            ], 
            'ByProjectKeyProductTypesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/product-types/{ID}',
            ], 
            'ByProjectKeyProductTypesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/product-types/{ID}',
            ], 
            'ByProjectKeyProductTypesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/product-types/{ID}',
            ], 
            'ByProjectKeyProductsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->get();
                },
                'get',
                '/{projectKey}/products',
            ], 
            'ByProjectKeyProductsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->post(null);
                },
                'post',
                '/{projectKey}/products',
            ], 
            'ByProjectKeyProductsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/products/key={key}',
            ], 
            'ByProjectKeyProductsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withKey('key')->post(null);
                },
                'post',
                '/{projectKey}/products/key={key}',
            ], 
            'ByProjectKeyProductsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withKey('key')->delete();
                },
                'delete',
                '/{projectKey}/products/key={key}',
            ], 
            'ByProjectKeyProductsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/products/{ID}',
            ], 
            'ByProjectKeyProductsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/products/{ID}',
            ], 
            'ByProjectKeyProductsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/products/{ID}',
            ], 
            'ByProjectKeyProductsByIDImagesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withId('ID')->images()->post(null);
                },
                'post',
                '/{projectKey}/products/{ID}/images',
            ], 
            'ByProjectKeyReviewsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->get();
                },
                'get',
                '/{projectKey}/reviews',
            ], 
            'ByProjectKeyReviewsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->post(null);
                },
                'post',
                '/{projectKey}/reviews',
            ], 
            'ByProjectKeyReviewsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/reviews/key={key}',
            ], 
            'ByProjectKeyReviewsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withKey('key')->post(null);
                },
                'post',
                '/{projectKey}/reviews/key={key}',
            ], 
            'ByProjectKeyReviewsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withKey('key')->delete();
                },
                'delete',
                '/{projectKey}/reviews/key={key}',
            ], 
            'ByProjectKeyReviewsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/reviews/{ID}',
            ], 
            'ByProjectKeyReviewsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/reviews/{ID}',
            ], 
            'ByProjectKeyReviewsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/reviews/{ID}',
            ], 
            'ByProjectKeyShippingMethodsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->get();
                },
                'get',
                '/{projectKey}/shipping-methods',
            ], 
            'ByProjectKeyShippingMethodsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->post(null);
                },
                'post',
                '/{projectKey}/shipping-methods',
            ], 
            'ByProjectKeyShippingMethodsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/shipping-methods/key={key}',
            ], 
            'ByProjectKeyShippingMethodsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withKey('key')->post(null);
                },
                'post',
                '/{projectKey}/shipping-methods/key={key}',
            ], 
            'ByProjectKeyShippingMethodsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withKey('key')->delete();
                },
                'delete',
                '/{projectKey}/shipping-methods/key={key}',
            ], 
            'ByProjectKeyShippingMethodsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/shipping-methods/{ID}',
            ], 
            'ByProjectKeyShippingMethodsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/shipping-methods/{ID}',
            ], 
            'ByProjectKeyShippingMethodsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/shipping-methods/{ID}',
            ], 
            'ByProjectKeyShoppingListsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->get();
                },
                'get',
                '/{projectKey}/shopping-lists',
            ], 
            'ByProjectKeyShoppingListsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->post(null);
                },
                'post',
                '/{projectKey}/shopping-lists',
            ], 
            'ByProjectKeyShoppingListsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/shopping-lists/key={key}',
            ], 
            'ByProjectKeyShoppingListsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withKey('key')->post(null);
                },
                'post',
                '/{projectKey}/shopping-lists/key={key}',
            ], 
            'ByProjectKeyShoppingListsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withKey('key')->delete();
                },
                'delete',
                '/{projectKey}/shopping-lists/key={key}',
            ], 
            'ByProjectKeyShoppingListsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/shopping-lists/{ID}',
            ], 
            'ByProjectKeyShoppingListsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/shopping-lists/{ID}',
            ], 
            'ByProjectKeyShoppingListsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/shopping-lists/{ID}',
            ], 
            'ByProjectKeyStatesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->get();
                },
                'get',
                '/{projectKey}/states',
            ], 
            'ByProjectKeyStatesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->post(null);
                },
                'post',
                '/{projectKey}/states',
            ], 
            'ByProjectKeyStatesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/states/{ID}',
            ], 
            'ByProjectKeyStatesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/states/{ID}',
            ], 
            'ByProjectKeyStatesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/states/{ID}',
            ], 
            'ByProjectKeySubscriptionsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->get();
                },
                'get',
                '/{projectKey}/subscriptions',
            ], 
            'ByProjectKeySubscriptionsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->post(null);
                },
                'post',
                '/{projectKey}/subscriptions',
            ], 
            'ByProjectKeySubscriptionsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/subscriptions/key={key}',
            ], 
            'ByProjectKeySubscriptionsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withKey('key')->post(null);
                },
                'post',
                '/{projectKey}/subscriptions/key={key}',
            ], 
            'ByProjectKeySubscriptionsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withKey('key')->delete();
                },
                'delete',
                '/{projectKey}/subscriptions/key={key}',
            ], 
            'ByProjectKeySubscriptionsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/subscriptions/{ID}',
            ], 
            'ByProjectKeySubscriptionsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/subscriptions/{ID}',
            ], 
            'ByProjectKeySubscriptionsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/subscriptions/{ID}',
            ], 
            'ByProjectKeyTaxCategoriesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->get();
                },
                'get',
                '/{projectKey}/tax-categories',
            ], 
            'ByProjectKeyTaxCategoriesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->post(null);
                },
                'post',
                '/{projectKey}/tax-categories',
            ], 
            'ByProjectKeyTaxCategoriesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/tax-categories/{ID}',
            ], 
            'ByProjectKeyTaxCategoriesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/tax-categories/{ID}',
            ], 
            'ByProjectKeyTaxCategoriesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/tax-categories/{ID}',
            ], 
            'ByProjectKeyTypesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->get();
                },
                'get',
                '/{projectKey}/types',
            ], 
            'ByProjectKeyTypesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->post(null);
                },
                'post',
                '/{projectKey}/types',
            ], 
            'ByProjectKeyTypesKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withKey('key')->get();
                },
                'get',
                '/{projectKey}/types/key={key}',
            ], 
            'ByProjectKeyTypesKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withKey('key')->post(null);
                },
                'post',
                '/{projectKey}/types/key={key}',
            ], 
            'ByProjectKeyTypesKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withKey('key')->delete();
                },
                'delete',
                '/{projectKey}/types/key={key}',
            ], 
            'ByProjectKeyTypesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/types/{ID}',
            ], 
            'ByProjectKeyTypesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/types/{ID}',
            ], 
            'ByProjectKeyTypesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/types/{ID}',
            ], 
            'ByProjectKeyZonesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->get();
                },
                'get',
                '/{projectKey}/zones',
            ], 
            'ByProjectKeyZonesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->post(null);
                },
                'post',
                '/{projectKey}/zones',
            ], 
            'ByProjectKeyZonesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->withId('ID')->get();
                },
                'get',
                '/{projectKey}/zones/{ID}',
            ], 
            'ByProjectKeyZonesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->withId('ID')->post(null);
                },
                'post',
                '/{projectKey}/zones/{ID}',
            ], 
            'ByProjectKeyZonesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->withId('ID')->delete();
                },
                'delete',
                '/{projectKey}/zones/{ID}',
            ], 
            'create_CartDiscountDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->create(function ($draft){
                        static::assertInstanceOf(CartDiscountDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/cart-discounts',
            ], 
            'create_CartDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->create(function ($draft){
                        static::assertInstanceOf(CartDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/carts',
            ], 
            'create_CategoryDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->create(function ($draft){
                        static::assertInstanceOf(CategoryDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/categories',
            ], 
            'create_ChannelDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->create(function ($draft){
                        static::assertInstanceOf(ChannelDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/channels',
            ], 
            'create_CustomerGroupDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->create(function ($draft){
                        static::assertInstanceOf(CustomerGroupDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/customer-groups',
            ], 
            'create_CustomerDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->create(function ($draft){
                        static::assertInstanceOf(CustomerDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/customers',
            ], 
            'create_DiscountCodeDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->create(function ($draft){
                        static::assertInstanceOf(DiscountCodeDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/discount-codes',
            ], 
            'create_ExtensionDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->create(function ($draft){
                        static::assertInstanceOf(ExtensionDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/extensions',
            ], 
            'create_InventoryEntryDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->create(function ($draft){
                        static::assertInstanceOf(InventoryEntryDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/inventory',
            ], 
            'create_OrderFromCartDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->create(function ($draft){
                        static::assertInstanceOf(OrderFromCartDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/orders',
            ], 
            'create_PaymentDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->create(function ($draft){
                        static::assertInstanceOf(PaymentDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/payments',
            ], 
            'create_ProductDiscountDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->create(function ($draft){
                        static::assertInstanceOf(ProductDiscountDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/product-discounts',
            ], 
            'create_ProductTypeDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->create(function ($draft){
                        static::assertInstanceOf(ProductTypeDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/product-types',
            ], 
            'create_ProductDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->create(function ($draft){
                        static::assertInstanceOf(ProductDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/products',
            ], 
            'create_ReviewDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->create(function ($draft){
                        static::assertInstanceOf(ReviewDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/reviews',
            ], 
            'create_ShippingMethodDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->create(function ($draft){
                        static::assertInstanceOf(ShippingMethodDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/shipping-methods',
            ], 
            'create_ShoppingListDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->create(function ($draft){
                        static::assertInstanceOf(ShoppingListDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/shopping-lists',
            ], 
            'create_StateDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->create(function ($draft){
                        static::assertInstanceOf(StateDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/states',
            ], 
            'create_SubscriptionDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->create(function ($draft){
                        static::assertInstanceOf(SubscriptionDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/subscriptions',
            ], 
            'create_TaxCategoryDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->create(function ($draft){
                        static::assertInstanceOf(TaxCategoryDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/tax-categories',
            ], 
            'create_TypeDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->create(function ($draft){
                        static::assertInstanceOf(TypeDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/types',
            ], 
            'create_ZoneDraft' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->create(function ($draft){
                        static::assertInstanceOf(ZoneDraft::class, $draft);
                        return $draft;
                    });
                },
                'post',
                '/{projectKey}/zones',
            ], 
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
            'update_Project' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->update(new ProjectModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}',
                '{"version": 1, "actions": []}'
            ], 
            'update_CartDiscount' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->update(new CartDiscountModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/cart-discounts/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Cart' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->update(new CartModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/carts/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Category' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->update(new CategoryModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/categories/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Channel' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->update(new ChannelModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/channels/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_CustomerGroup' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->update(new CustomerGroupModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/customer-groups/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Customer' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->update(new CustomerModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/customers/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_DiscountCode' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->update(new DiscountCodeModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/discount-codes/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Extension' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->update(new ExtensionModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/extensions/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_InventoryEntry' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->update(new InventoryEntryModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/inventory/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Order' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->update(new OrderModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/orders/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Payment' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->update(new PaymentModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/payments/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_ProductDiscount' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->update(new ProductDiscountModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/product-discounts/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_ProductType' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->update(new ProductTypeModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/product-types/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Product' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->update(new ProductModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/products/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Review' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->update(new ReviewModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/reviews/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_ShippingMethod' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->update(new ShippingMethodModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/shipping-methods/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_ShoppingList' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->update(new ShoppingListModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/shopping-lists/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_State' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->update(new StateModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/states/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Subscription' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->update(new SubscriptionModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/subscriptions/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_TaxCategory' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->update(new TaxCategoryModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/tax-categories/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Type' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->update(new TypeModel(['id' => 'ID', 'version' => 1]))->buildRequest();
                },
                'post',
                '/{projectKey}/types/{ID}',
                '{"version": 1, "actions": []}'
            ], 
            'update_Zone' => [
                function(RequestBuilder $builder): RequestInterface {
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