<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Project\ProjectUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}', $args, $client);
    }

    /**
     */
    public function categories(): ResourceByProjectKeyCategories
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCategories($args, $this->getClient());
    }
    /**
     */
    public function carts(): ResourceByProjectKeyCarts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCarts($args, $this->getClient());
    }
    /**
     */
    public function cartDiscounts(): ResourceByProjectKeyCartDiscounts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCartDiscounts($args, $this->getClient());
    }
    /**
     */
    public function channels(): ResourceByProjectKeyChannels
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyChannels($args, $this->getClient());
    }
    /**
     */
    public function customers(): ResourceByProjectKeyCustomers
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomers($args, $this->getClient());
    }
    /**
     */
    public function customerGroups(): ResourceByProjectKeyCustomerGroups
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomerGroups($args, $this->getClient());
    }
    /**
     */
    public function customObjects(): ResourceByProjectKeyCustomObjects
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomObjects($args, $this->getClient());
    }
    /**
     */
    public function discountCodes(): ResourceByProjectKeyDiscountCodes
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyDiscountCodes($args, $this->getClient());
    }
    /**
     */
    public function graphql(): ResourceByProjectKeyGraphql
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyGraphql($args, $this->getClient());
    }
    /**
     */
    public function inventory(): ResourceByProjectKeyInventory
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInventory($args, $this->getClient());
    }
    /**
     */
    public function login(): ResourceByProjectKeyLogin
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyLogin($args, $this->getClient());
    }
    /**
     */
    public function messages(): ResourceByProjectKeyMessages
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMessages($args, $this->getClient());
    }
    /**
     */
    public function orders(): ResourceByProjectKeyOrders
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyOrders($args, $this->getClient());
    }
    /**
     */
    public function payments(): ResourceByProjectKeyPayments
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyPayments($args, $this->getClient());
    }
    /**
     */
    public function products(): ResourceByProjectKeyProducts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProducts($args, $this->getClient());
    }
    /**
     */
    public function productDiscounts(): ResourceByProjectKeyProductDiscounts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductDiscounts($args, $this->getClient());
    }
    /**
     */
    public function productProjections(): ResourceByProjectKeyProductProjections
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductProjections($args, $this->getClient());
    }
    /**
     */
    public function productSelections(): ResourceByProjectKeyProductSelections
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductSelections($args, $this->getClient());
    }
    /**
     */
    public function productTypes(): ResourceByProjectKeyProductTypes
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductTypes($args, $this->getClient());
    }
    /**
     */
    public function reviews(): ResourceByProjectKeyReviews
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyReviews($args, $this->getClient());
    }
    /**
     */
    public function shippingMethods(): ResourceByProjectKeyShippingMethods
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyShippingMethods($args, $this->getClient());
    }
    /**
     */
    public function shoppingLists(): ResourceByProjectKeyShoppingLists
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyShoppingLists($args, $this->getClient());
    }
    /**
     */
    public function states(): ResourceByProjectKeyStates
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyStates($args, $this->getClient());
    }
    /**
     */
    public function subscriptions(): ResourceByProjectKeySubscriptions
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeySubscriptions($args, $this->getClient());
    }
    /**
     */
    public function taxCategories(): ResourceByProjectKeyTaxCategories
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyTaxCategories($args, $this->getClient());
    }
    /**
     */
    public function types(): ResourceByProjectKeyTypes
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyTypes($args, $this->getClient());
    }
    /**
     */
    public function zones(): ResourceByProjectKeyZones
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyZones($args, $this->getClient());
    }
    /**
     */
    public function me(): ResourceByProjectKeyMe
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMe($args, $this->getClient());
    }
    /**
     */
    public function extensions(): ResourceByProjectKeyExtensions
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyExtensions($args, $this->getClient());
    }
    /**
     */
    public function apiClients(): ResourceByProjectKeyApiClients
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyApiClients($args, $this->getClient());
    }
    /**
     */
    public function stores(): ResourceByProjectKeyStores
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyStores($args, $this->getClient());
    }
    /**
     */
    public function inStoreKeyWithStoreKeyValue(string $storeKey = null): ResourceByProjectKeyInStoreKeyByStoreKey
    {
        $args = $this->getArgs();
        if (!is_null($storeKey)) {
            $args['storeKey'] = $storeKey;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKey($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProjectUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProjectUpdate $body = null, array $headers = []): ByProjectKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
