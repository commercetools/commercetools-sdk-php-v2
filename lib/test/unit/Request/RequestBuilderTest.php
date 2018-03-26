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
            ], 'ByProjectKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->post($body = null);
                },
                'post',
                '/{projectKey}',
            ], 'ByProjectKeyCategoriesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->get();
                },
                'get',
                '/{projectKey}/categories',
            ], 'ByProjectKeyCategoriesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->post($body = null);
                },
                'post',
                '/{projectKey}/categories',
            ], 'ByProjectKeyCategoriesKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/categories/key={key}',
            ], 'ByProjectKeyCategoriesKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->keyWithKeyValue('key')->post($body = null);
                },
                'post',
                '/{projectKey}/categories/key={key}',
            ], 'ByProjectKeyCategoriesKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->keyWithKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/categories/key={key}',
            ], 'ByProjectKeyCategoriesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/categories/{ID}',
            ], 'ByProjectKeyCategoriesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/categories/{ID}',
            ], 'ByProjectKeyCategoriesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->categories()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/categories/{ID}',
            ], 'ByProjectKeyCartsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->get();
                },
                'get',
                '/{projectKey}/carts',
            ], 'ByProjectKeyCartsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->post($body = null);
                },
                'post',
                '/{projectKey}/carts',
            ], 'ByProjectKeyCartsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/carts/{ID}',
            ], 'ByProjectKeyCartsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/carts/{ID}',
            ], 'ByProjectKeyCartsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->carts()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/carts/{ID}',
            ], 'ByProjectKeyCartDiscountsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->get();
                },
                'get',
                '/{projectKey}/cart-discounts',
            ], 'ByProjectKeyCartDiscountsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->post($body = null);
                },
                'post',
                '/{projectKey}/cart-discounts',
            ], 'ByProjectKeyCartDiscountsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/cart-discounts/{ID}',
            ], 'ByProjectKeyCartDiscountsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/cart-discounts/{ID}',
            ], 'ByProjectKeyCartDiscountsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->cartDiscounts()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/cart-discounts/{ID}',
            ], 'ByProjectKeyChannelsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->get();
                },
                'get',
                '/{projectKey}/channels',
            ], 'ByProjectKeyChannelsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->post($body = null);
                },
                'post',
                '/{projectKey}/channels',
            ], 'ByProjectKeyChannelsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/channels/{ID}',
            ], 'ByProjectKeyChannelsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/channels/{ID}',
            ], 'ByProjectKeyChannelsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->channels()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/channels/{ID}',
            ], 'ByProjectKeyCustomersGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->get();
                },
                'get',
                '/{projectKey}/customers',
            ], 'ByProjectKeyCustomersPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->post($body = null);
                },
                'post',
                '/{projectKey}/customers',
            ], 'ByProjectKeyCustomersPasswordTokenByPasswordTokenGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->passwordTokenWithPasswordTokenValue('passwordToken')->get();
                },
                'get',
                '/{projectKey}/customers/password-token={passwordToken}',
            ], 'ByProjectKeyCustomersEmailTokenByEmailTokenGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->emailTokenWithEmailTokenValue('emailToken')->get();
                },
                'get',
                '/{projectKey}/customers/email-token={emailToken}',
            ], 'ByProjectKeyCustomersEmailTokenPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->emailToken()->post($body = null);
                },
                'post',
                '/{projectKey}/customers/email-token',
            ], 'ByProjectKeyCustomersEmailConfirmPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->email()->confirm()->post($body = null);
                },
                'post',
                '/{projectKey}/customers/email/confirm',
            ], 'ByProjectKeyCustomersPasswordPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->password()->post($body = null);
                },
                'post',
                '/{projectKey}/customers/password',
            ], 'ByProjectKeyCustomersPasswordResetPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->password()->reset()->post($body = null);
                },
                'post',
                '/{projectKey}/customers/password/reset',
            ], 'ByProjectKeyCustomersPasswordTokenPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->passwordToken()->post($body = null);
                },
                'post',
                '/{projectKey}/customers/password-token',
            ], 'ByProjectKeyCustomersByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/customers/{ID}',
            ], 'ByProjectKeyCustomersByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/customers/{ID}',
            ], 'ByProjectKeyCustomersByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customers()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/customers/{ID}',
            ], 'ByProjectKeyCustomerGroupsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->get();
                },
                'get',
                '/{projectKey}/customer-groups',
            ], 'ByProjectKeyCustomerGroupsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->post($body = null);
                },
                'post',
                '/{projectKey}/customer-groups',
            ], 'ByProjectKeyCustomerGroupsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/customer-groups/key={key}',
            ], 'ByProjectKeyCustomerGroupsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->keyWithKeyValue('key')->post($body = null);
                },
                'post',
                '/{projectKey}/customer-groups/key={key}',
            ], 'ByProjectKeyCustomerGroupsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->keyWithKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/customer-groups/key={key}',
            ], 'ByProjectKeyCustomerGroupsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/customer-groups/{ID}',
            ], 'ByProjectKeyCustomerGroupsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/customer-groups/{ID}',
            ], 'ByProjectKeyCustomerGroupsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customerGroups()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/customer-groups/{ID}',
            ], 'ByProjectKeyCustomObjectsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->get();
                },
                'get',
                '/{projectKey}/custom-objects',
            ], 'ByProjectKeyCustomObjectsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->post($body = null);
                },
                'post',
                '/{projectKey}/custom-objects',
            ], 'ByProjectKeyCustomObjectsByContainerGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withContainerValue('container')->get();
                },
                'get',
                '/{projectKey}/custom-objects/{container}',
            ], 'ByProjectKeyCustomObjectsByContainerDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withContainerValue('container')->delete();
                },
                'delete',
                '/{projectKey}/custom-objects/{container}',
            ], 'ByProjectKeyCustomObjectsByContainerByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withContainerValue('container')->withKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/custom-objects/{container}/{key}',
            ], 'ByProjectKeyCustomObjectsByContainerByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->customObjects()->withContainerValue('container')->withKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/custom-objects/{container}/{key}',
            ], 'ByProjectKeyDiscountCodesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->get();
                },
                'get',
                '/{projectKey}/discount-codes',
            ], 'ByProjectKeyDiscountCodesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->post($body = null);
                },
                'post',
                '/{projectKey}/discount-codes',
            ], 'ByProjectKeyDiscountCodesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/discount-codes/{ID}',
            ], 'ByProjectKeyDiscountCodesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/discount-codes/{ID}',
            ], 'ByProjectKeyDiscountCodesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->discountCodes()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/discount-codes/{ID}',
            ], 'ByProjectKeyGraphqlPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->graphql()->post();
                },
                'post',
                '/{projectKey}/graphql',
            ], 'ByProjectKeyInventoryGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->get();
                },
                'get',
                '/{projectKey}/inventory',
            ], 'ByProjectKeyInventoryPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->post($body = null);
                },
                'post',
                '/{projectKey}/inventory',
            ], 'ByProjectKeyInventoryByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/inventory/{ID}',
            ], 'ByProjectKeyInventoryByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/inventory/{ID}',
            ], 'ByProjectKeyInventoryByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->inventory()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/inventory/{ID}',
            ], 'ByProjectKeyLoginPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->login()->post($body = null);
                },
                'post',
                '/{projectKey}/login',
            ], 'ByProjectKeyMessagesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->messages()->get();
                },
                'get',
                '/{projectKey}/messages',
            ], 'ByProjectKeyMessagesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->messages()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/messages/{ID}',
            ], 'ByProjectKeyOrdersGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->get();
                },
                'get',
                '/{projectKey}/orders',
            ], 'ByProjectKeyOrdersPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->post($body = null);
                },
                'post',
                '/{projectKey}/orders',
            ], 'ByProjectKeyOrdersImportPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->import()->post($body = null);
                },
                'post',
                '/{projectKey}/orders/import',
            ], 'ByProjectKeyOrdersOrderNumberByOrderNumberGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->orderNumberWithOrderNumberValue('orderNumber')->get();
                },
                'get',
                '/{projectKey}/orders/order-number={orderNumber}',
            ], 'ByProjectKeyOrdersOrderNumberByOrderNumberPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->orderNumberWithOrderNumberValue('orderNumber')->post($body = null);
                },
                'post',
                '/{projectKey}/orders/order-number={orderNumber}',
            ], 'ByProjectKeyOrdersOrderNumberByOrderNumberDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->orderNumberWithOrderNumberValue('orderNumber')->delete();
                },
                'delete',
                '/{projectKey}/orders/order-number={orderNumber}',
            ], 'ByProjectKeyOrdersByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/orders/{ID}',
            ], 'ByProjectKeyOrdersByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/orders/{ID}',
            ], 'ByProjectKeyOrdersByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->orders()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/orders/{ID}',
            ], 'ByProjectKeyPaymentsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->get();
                },
                'get',
                '/{projectKey}/payments',
            ], 'ByProjectKeyPaymentsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->post($body = null);
                },
                'post',
                '/{projectKey}/payments',
            ], 'ByProjectKeyPaymentsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/payments/key={key}',
            ], 'ByProjectKeyPaymentsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->keyWithKeyValue('key')->post($body = null);
                },
                'post',
                '/{projectKey}/payments/key={key}',
            ], 'ByProjectKeyPaymentsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->keyWithKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/payments/key={key}',
            ], 'ByProjectKeyPaymentsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/payments/{ID}',
            ], 'ByProjectKeyPaymentsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/payments/{ID}',
            ], 'ByProjectKeyPaymentsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->payments()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/payments/{ID}',
            ], 'ByProjectKeyProductsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->get();
                },
                'get',
                '/{projectKey}/products',
            ], 'ByProjectKeyProductsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->post($body = null);
                },
                'post',
                '/{projectKey}/products',
            ], 'ByProjectKeyProductsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/products/key={key}',
            ], 'ByProjectKeyProductsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->keyWithKeyValue('key')->post($body = null);
                },
                'post',
                '/{projectKey}/products/key={key}',
            ], 'ByProjectKeyProductsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->keyWithKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/products/key={key}',
            ], 'ByProjectKeyProductsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/products/{ID}',
            ], 'ByProjectKeyProductsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/products/{ID}',
            ], 'ByProjectKeyProductsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/products/{ID}',
            ], 'ByProjectKeyProductsByIDImagesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->products()->withIDValue('ID')->images()->post($body = null);
                },
                'post',
                '/{projectKey}/products/{ID}/images',
            ], 'ByProjectKeyProductDiscountsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->get();
                },
                'get',
                '/{projectKey}/product-discounts',
            ], 'ByProjectKeyProductDiscountsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->post($body = null);
                },
                'post',
                '/{projectKey}/product-discounts',
            ], 'ByProjectKeyProductDiscountsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/product-discounts/{ID}',
            ], 'ByProjectKeyProductDiscountsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/product-discounts/{ID}',
            ], 'ByProjectKeyProductDiscountsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productDiscounts()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/product-discounts/{ID}',
            ], 'ByProjectKeyProductProjectionsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->get();
                },
                'get',
                '/{projectKey}/product-projections',
            ], 'ByProjectKeyProductProjectionsSearchPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->search()->post();
                },
                'post',
                '/{projectKey}/product-projections/search',
            ], 'ByProjectKeyProductProjectionsSearchGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->search()->get();
                },
                'get',
                '/{projectKey}/product-projections/search',
            ], 'ByProjectKeyProductProjectionsSuggestGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->suggest()->get();
                },
                'get',
                '/{projectKey}/product-projections/suggest',
            ], 'ByProjectKeyProductProjectionsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/product-projections/key={key}',
            ], 'ByProjectKeyProductProjectionsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productProjections()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/product-projections/{ID}',
            ], 'ByProjectKeyProductTypesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->get();
                },
                'get',
                '/{projectKey}/product-types',
            ], 'ByProjectKeyProductTypesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->post($body = null);
                },
                'post',
                '/{projectKey}/product-types',
            ], 'ByProjectKeyProductTypesKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/product-types/key={key}',
            ], 'ByProjectKeyProductTypesKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->keyWithKeyValue('key')->post($body = null);
                },
                'post',
                '/{projectKey}/product-types/key={key}',
            ], 'ByProjectKeyProductTypesKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->keyWithKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/product-types/key={key}',
            ], 'ByProjectKeyProductTypesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/product-types/{ID}',
            ], 'ByProjectKeyProductTypesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/product-types/{ID}',
            ], 'ByProjectKeyProductTypesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->productTypes()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/product-types/{ID}',
            ], 'ByProjectKeyReviewsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->get();
                },
                'get',
                '/{projectKey}/reviews',
            ], 'ByProjectKeyReviewsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->post($body = null);
                },
                'post',
                '/{projectKey}/reviews',
            ], 'ByProjectKeyReviewsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/reviews/key={key}',
            ], 'ByProjectKeyReviewsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->keyWithKeyValue('key')->post($body = null);
                },
                'post',
                '/{projectKey}/reviews/key={key}',
            ], 'ByProjectKeyReviewsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->keyWithKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/reviews/key={key}',
            ], 'ByProjectKeyReviewsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/reviews/{ID}',
            ], 'ByProjectKeyReviewsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/reviews/{ID}',
            ], 'ByProjectKeyReviewsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->reviews()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/reviews/{ID}',
            ], 'ByProjectKeyShippingMethodsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->get();
                },
                'get',
                '/{projectKey}/shipping-methods',
            ], 'ByProjectKeyShippingMethodsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->post($body = null);
                },
                'post',
                '/{projectKey}/shipping-methods',
            ], 'ByProjectKeyShippingMethodsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/shipping-methods/key={key}',
            ], 'ByProjectKeyShippingMethodsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->keyWithKeyValue('key')->post($body = null);
                },
                'post',
                '/{projectKey}/shipping-methods/key={key}',
            ], 'ByProjectKeyShippingMethodsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->keyWithKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/shipping-methods/key={key}',
            ], 'ByProjectKeyShippingMethodsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/shipping-methods/{ID}',
            ], 'ByProjectKeyShippingMethodsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/shipping-methods/{ID}',
            ], 'ByProjectKeyShippingMethodsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shippingMethods()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/shipping-methods/{ID}',
            ], 'ByProjectKeyShoppingListsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->get();
                },
                'get',
                '/{projectKey}/shopping-lists',
            ], 'ByProjectKeyShoppingListsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->post($body = null);
                },
                'post',
                '/{projectKey}/shopping-lists',
            ], 'ByProjectKeyShoppingListsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/shopping-lists/key={key}',
            ], 'ByProjectKeyShoppingListsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->keyWithKeyValue('key')->post($body = null);
                },
                'post',
                '/{projectKey}/shopping-lists/key={key}',
            ], 'ByProjectKeyShoppingListsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->keyWithKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/shopping-lists/key={key}',
            ], 'ByProjectKeyShoppingListsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/shopping-lists/{ID}',
            ], 'ByProjectKeyShoppingListsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/shopping-lists/{ID}',
            ], 'ByProjectKeyShoppingListsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->shoppingLists()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/shopping-lists/{ID}',
            ], 'ByProjectKeyStatesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->get();
                },
                'get',
                '/{projectKey}/states',
            ], 'ByProjectKeyStatesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->post($body = null);
                },
                'post',
                '/{projectKey}/states',
            ], 'ByProjectKeyStatesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/states/{ID}',
            ], 'ByProjectKeyStatesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/states/{ID}',
            ], 'ByProjectKeyStatesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->states()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/states/{ID}',
            ], 'ByProjectKeySubscriptionsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->get();
                },
                'get',
                '/{projectKey}/subscriptions',
            ], 'ByProjectKeySubscriptionsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->post($body = null);
                },
                'post',
                '/{projectKey}/subscriptions',
            ], 'ByProjectKeySubscriptionsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/subscriptions/key={key}',
            ], 'ByProjectKeySubscriptionsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->keyWithKeyValue('key')->post($body = null);
                },
                'post',
                '/{projectKey}/subscriptions/key={key}',
            ], 'ByProjectKeySubscriptionsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->keyWithKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/subscriptions/key={key}',
            ], 'ByProjectKeySubscriptionsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/subscriptions/{ID}',
            ], 'ByProjectKeySubscriptionsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/subscriptions/{ID}',
            ], 'ByProjectKeySubscriptionsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->subscriptions()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/subscriptions/{ID}',
            ], 'ByProjectKeyTaxCategoriesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->get();
                },
                'get',
                '/{projectKey}/tax-categories',
            ], 'ByProjectKeyTaxCategoriesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->post($body = null);
                },
                'post',
                '/{projectKey}/tax-categories',
            ], 'ByProjectKeyTaxCategoriesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/tax-categories/{ID}',
            ], 'ByProjectKeyTaxCategoriesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/tax-categories/{ID}',
            ], 'ByProjectKeyTaxCategoriesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->taxCategories()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/tax-categories/{ID}',
            ], 'ByProjectKeyTypesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->get();
                },
                'get',
                '/{projectKey}/types',
            ], 'ByProjectKeyTypesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->post($body = null);
                },
                'post',
                '/{projectKey}/types',
            ], 'ByProjectKeyTypesKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/types/key={key}',
            ], 'ByProjectKeyTypesKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->keyWithKeyValue('key')->post($body = null);
                },
                'post',
                '/{projectKey}/types/key={key}',
            ], 'ByProjectKeyTypesKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->keyWithKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/types/key={key}',
            ], 'ByProjectKeyTypesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/types/{ID}',
            ], 'ByProjectKeyTypesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/types/{ID}',
            ], 'ByProjectKeyTypesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->types()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/types/{ID}',
            ], 'ByProjectKeyZonesGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->get();
                },
                'get',
                '/{projectKey}/zones',
            ], 'ByProjectKeyZonesPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->post($body = null);
                },
                'post',
                '/{projectKey}/zones',
            ], 'ByProjectKeyZonesByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/zones/{ID}',
            ], 'ByProjectKeyZonesByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/zones/{ID}',
            ], 'ByProjectKeyZonesByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->zones()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/zones/{ID}',
            ], 'ByProjectKeyMeGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->get();
                },
                'get',
                '/{projectKey}/me',
            ], 'ByProjectKeyMePost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->post($body = null);
                },
                'post',
                '/{projectKey}/me',
            ], 'ByProjectKeyMeDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->delete();
                },
                'delete',
                '/{projectKey}/me',
            ], 'ByProjectKeyMeEmailConfirmPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->email()->confirm()->post();
                },
                'post',
                '/{projectKey}/me/email/confirm',
            ], 'ByProjectKeyMePasswordPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->password()->post();
                },
                'post',
                '/{projectKey}/me/password',
            ], 'ByProjectKeyMePasswordResetPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->password()->reset()->post();
                },
                'post',
                '/{projectKey}/me/password/reset',
            ], 'ByProjectKeyMeSignupPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->signup()->post($body = null);
                },
                'post',
                '/{projectKey}/me/signup',
            ], 'ByProjectKeyMeLoginPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->login()->post();
                },
                'post',
                '/{projectKey}/me/login',
            ], 'ByProjectKeyMeActiveCartGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->activeCart()->get();
                },
                'get',
                '/{projectKey}/me/active-cart',
            ], 'ByProjectKeyMeCartsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->get();
                },
                'get',
                '/{projectKey}/me/carts',
            ], 'ByProjectKeyMeCartsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->post($body = null);
                },
                'post',
                '/{projectKey}/me/carts',
            ], 'ByProjectKeyMeCartsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/me/carts/{ID}',
            ], 'ByProjectKeyMeCartsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/me/carts/{ID}',
            ], 'ByProjectKeyMeCartsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->carts()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/me/carts/{ID}',
            ], 'ByProjectKeyMeOrdersGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->get();
                },
                'get',
                '/{projectKey}/me/orders',
            ], 'ByProjectKeyMeOrdersPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->post($body = null);
                },
                'post',
                '/{projectKey}/me/orders',
            ], 'ByProjectKeyMeOrdersByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/me/orders/{ID}',
            ], 'ByProjectKeyMeOrdersByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->me()->orders()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/me/orders/{ID}',
            ], 'ByProjectKeyExtensionsGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->get();
                },
                'get',
                '/{projectKey}/extensions',
            ], 'ByProjectKeyExtensionsPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->post($body = null);
                },
                'post',
                '/{projectKey}/extensions',
            ], 'ByProjectKeyExtensionsKeyByKeyGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->keyWithKeyValue('key')->get();
                },
                'get',
                '/{projectKey}/extensions/key={key}',
            ], 'ByProjectKeyExtensionsKeyByKeyPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->keyWithKeyValue('key')->post($body = null);
                },
                'post',
                '/{projectKey}/extensions/key={key}',
            ], 'ByProjectKeyExtensionsKeyByKeyDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->keyWithKeyValue('key')->delete();
                },
                'delete',
                '/{projectKey}/extensions/key={key}',
            ], 'ByProjectKeyExtensionsByIDGet' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withIDValue('ID')->get();
                },
                'get',
                '/{projectKey}/extensions/{ID}',
            ], 'ByProjectKeyExtensionsByIDPost' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withIDValue('ID')->post($body = null);
                },
                'post',
                '/{projectKey}/extensions/{ID}',
            ], 'ByProjectKeyExtensionsByIDDelete' => [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKeyValue('projectKey')->extensions()->withIDValue('ID')->delete();
                },
                'delete',
                '/{projectKey}/extensions/{ID}',
            ]
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri)
    {
        $builder = new RequestBuilder();
        $request = $builderFunction($builder);

        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertContains(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
    }
}