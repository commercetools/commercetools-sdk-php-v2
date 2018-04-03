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