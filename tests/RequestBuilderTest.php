<?php
declare(strict_types=1);

namespace Commercetools\Raml\Tests;

use Commercetools\Raml\RequestBuilder;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;



class RequestBuilderTest extends TestCase
{
    public function getRequests()
    {
        return [
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->categories()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/categories',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->categories()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/categories',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->categories()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/categories/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->categories()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/categories/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->categories()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/categories/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->carts()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/carts',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->carts()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/carts',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->carts()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/carts/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->carts()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/carts/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->carts()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/carts/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->cartDiscounts()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/cart-discounts',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->cartDiscounts()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/cart-discounts',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->cartDiscounts()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/cart-discounts/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->cartDiscounts()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/cart-discounts/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->cartDiscounts()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/cart-discounts/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->channels()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/channels',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->channels()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/channels',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->channels()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/channels/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->channels()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/channels/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->channels()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/channels/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customers()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/customers',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customers()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/customers',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customers()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/customers/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customers()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/customers/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customers()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/customers/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customers()->emailToken()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/customers/email-token',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customers()->email()->confirm()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/customers/email/confirm',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customers()->password()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/customers/password',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customers()->passwordToken()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/customers/password-token',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customers()->password()->reset()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/customers/password/reset',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customerGroups()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/customer-groups',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customerGroups()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/customer-groups',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customerGroups()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/customer-groups/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customerGroups()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/customer-groups/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customerGroups()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/customer-groups/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customObjects()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/custom-objects',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customObjects()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/custom-objects',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customObjects()->withContainer('container')->withKey('key')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/custom-objects/{container}/{key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customObjects()->withContainer('container')->withKey('key')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/custom-objects/{container}/{key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customObjects()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/custom-objects/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->customObjects()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/custom-objects/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->discountCodes()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/discount-codes',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->discountCodes()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/discount-codes',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->discountCodes()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/discount-codes/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->discountCodes()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/discount-codes/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->discountCodes()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/discount-codes/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->graphql()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/graphql',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->inventory()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/inventory',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->inventory()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/inventory',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->inventory()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/inventory/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->inventory()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/inventory/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->inventory()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/inventory/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->login()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/login',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->messages()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/messages',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->messages()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/messages/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->orders()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/orders',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->orders()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/orders',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->orders()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/orders/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->orders()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/orders/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->orders()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/orders/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->orders()->import()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/orders/import',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->payments()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/payments',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->payments()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/payments',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->payments()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/payments/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->payments()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/payments/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->payments()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/payments/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->products()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/products',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->products()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/products',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->products()->withKey('key')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/products/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->products()->withKey('key')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/products/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->products()->withKey('key')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/products/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->products()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/products/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->products()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/products/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->products()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/products/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->products()->withId('ID')->images()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/products/{ID}/images',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productDiscounts()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/product-discounts',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productDiscounts()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/product-discounts',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productDiscounts()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/product-discounts/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productDiscounts()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/product-discounts/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productDiscounts()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/product-discounts/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productProjections()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/product-projections',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productProjections()->withKey('key')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/product-projections/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productProjections()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/product-projections/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productProjections()->search()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/product-projections/search',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productProjections()->search()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/product-projections/search',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productProjections()->suggest()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/product-projections/suggest',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productTypes()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/product-types',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productTypes()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/product-types',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productTypes()->withKey('key')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/product-types/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productTypes()->withKey('key')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/product-types/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productTypes()->withKey('key')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/product-types/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productTypes()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/product-types/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productTypes()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/product-types/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->productTypes()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/product-types/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->reviews()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/reviews',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->reviews()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/reviews',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->reviews()->withKey('key')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/reviews/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->reviews()->withKey('key')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/reviews/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->reviews()->withKey('key')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/reviews/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->reviews()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/reviews/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->reviews()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/reviews/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->reviews()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/reviews/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->shippingMethods()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/shipping-methods',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->shippingMethods()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/shipping-methods',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->shippingMethods()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/shipping-methods/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->shippingMethods()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/shipping-methods/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->shippingMethods()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/shipping-methods/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->states()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/states',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->states()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/states',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->states()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/states/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->states()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/states/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->states()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/states/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->subscriptions()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/subscriptions',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->subscriptions()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/subscriptions',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->subscriptions()->withKey('key')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/subscriptions/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->subscriptions()->withKey('key')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/subscriptions/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->subscriptions()->withKey('key')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/subscriptions/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->subscriptions()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/subscriptions/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->subscriptions()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/subscriptions/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->subscriptions()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/subscriptions/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->taxCategories()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/tax-categories',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->taxCategories()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/tax-categories',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->taxCategories()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/tax-categories/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->taxCategories()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/tax-categories/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->taxCategories()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/tax-categories/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->types()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/types',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->types()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/types',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->types()->withKey('key')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/types/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->types()->withKey('key')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/types/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->types()->withKey('key')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/types/key={key}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->types()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/types/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->types()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/types/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->types()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/types/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->zones()->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/zones',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->zones()->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/zones',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->zones()->withId('ID')->get($query = null, $options = []);
                },
                'GET',
                '/{projectKey}/zones/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->zones()->withId('ID')->post($body = null, $options = []);
                },
                'POST',
                '/{projectKey}/zones/{ID}',
            ],
            [
                function(RequestBuilder $builder): RequestInterface {
                    return $builder->withProjectKey('projectKey')->zones()->withId('ID')->delete($body = null, $options = []);
                },
                'DELETE',
                '/{projectKey}/zones/{ID}',
            ],

        ];
    }
    
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri)
    {
        $builder = new RequestBuilder();
        $request = $builderFunction($builder);
        
        $parts = explode(' ', $request::API_PATH);
        $this->assertSame($method, $request->getMethod());
        $this->assertContains(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        $this->assertSame($method . ' ' . $relativeUri, $request::API_PATH);
    }
}
