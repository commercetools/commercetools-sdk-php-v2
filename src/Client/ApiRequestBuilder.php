<?php

namespace Commercetools\Client;

use Commercetools\Api\Client\Resource;
use Commercetools\Api\Client\ApiRequestBuilder as Builder;
use Commercetools\Api\Client\Resource\ResourceByProjectKey;
use Commercetools\Api\Models\Project\ProjectUpdate;
use GuzzleHttp\ClientInterface;

class ApiRequestBuilder extends Builder
{
    /**
     * @var string
     */
    private $projectKey;

    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(string $projectKey, ClientInterface $client, array $args = [])
    {
        parent::__construct($client, $args);
        $this->projectKey = $projectKey;
    }

    public function with(): ResourceByProjectKey
    {
        return $this->withProjectKey($this->projectKey);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): Resource\ByProjectKeyGet
    {
        return $this->with()->get($body, $headers);
    }

    /**
     * @psalm-param ?ProjectUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProjectUpdate $body = null, array $headers = []): Resource\ByProjectKeyPost
    {
        return $this->with()->post($body, $headers);
    }

    public function cartDiscounts(): Resource\ResourceByProjectKeyCartDiscounts
    {
        return $this->with()->cartDiscounts();
    }

    public function carts(): Resource\ResourceByProjectKeyCarts
    {
        return $this->with()->carts();
    }

    public function categories(): Resource\ResourceByProjectKeyCategories
    {
        return $this->with()->categories();
    }

    public function channels(): Resource\ResourceByProjectKeyChannels
    {
        return $this->with()->channels();
    }

    public function customerGroups(): Resource\ResourceByProjectKeyCustomerGroups
    {
        return $this->with()->customerGroups();
    }

    public function customObjects(): Resource\ResourceByProjectKeyCustomObjects
    {
        return $this->with()->customObjects();
    }

    public function customers(): Resource\ResourceByProjectKeyCustomers
    {
        return $this->with()->customers();
    }

    public function discountCodes(): Resource\ResourceByProjectKeyDiscountCodes
    {
        return $this->with()->discountCodes();
    }

    public function graphql(): Resource\ResourceByProjectKeyGraphql
    {
        return $this->with()->graphql();
    }

    public function inventory(): Resource\ResourceByProjectKeyInventory
    {
        return $this->with()->inventory();
    }

    public function login(): Resource\ResourceByProjectKeyLogin
    {
        return $this->with()->login();
    }

    public function messages(): Resource\ResourceByProjectKeyMessages
    {
        return $this->with()->messages();
    }

    public function orders(): Resource\ResourceByProjectKeyOrders
    {
        return $this->with()->orders();
    }

    public function payments(): Resource\ResourceByProjectKeyPayments
    {
        return $this->with()->payments();
    }

    public function products(): Resource\ResourceByProjectKeyProducts
    {
        return $this->with()->products();
    }

    public function productDiscounts(): Resource\ResourceByProjectKeyProductDiscounts
    {
        return $this->with()->productDiscounts();
    }

    public function productProjections(): Resource\ResourceByProjectKeyProductProjections
    {
        return $this->with()->productProjections();
    }

    public function productTypes(): Resource\ResourceByProjectKeyProductTypes
    {
        return $this->with()->productTypes();
    }

    public function reviews(): Resource\ResourceByProjectKeyReviews
    {
        return $this->with()->reviews();
    }

    public function shippingMethods(): Resource\ResourceByProjectKeyShippingMethods
    {
        return $this->with()->shippingMethods();
    }

    public function shoppingLists(): Resource\ResourceByProjectKeyShoppingLists
    {
        return $this->with()->shoppingLists();
    }

    public function states(): Resource\ResourceByProjectKeyStates
    {
        return $this->with()->states();
    }

    public function subscriptions(): Resource\ResourceByProjectKeySubscriptions
    {
        return $this->with()->subscriptions();
    }

    public function taxCategories(): Resource\ResourceByProjectKeyTaxCategories
    {
        return $this->with()->taxCategories();
    }

    public function types(): Resource\ResourceByProjectKeyTypes
    {
        return $this->with()->types();
    }

    public function zones(): Resource\ResourceByProjectKeyZones
    {
        return $this->with()->zones();
    }

    public function me(): Resource\ResourceByProjectKeyMe
    {
        return $this->with()->me();
    }

    public function extensions(): Resource\ResourceByProjectKeyExtensions
    {
        return $this->with()->extensions();
    }

    public function apiClients(): Resource\ResourceByProjectKeyApiClients
    {
        return $this->with()->apiClients();
    }

    public function stores(): Resource\ResourceByProjectKeyStores
    {
        return $this->with()->stores();
    }

    public function inStore(string $storeKey): Resource\ResourceByProjectKeyInStoreKeyByStoreKey
    {
        return $this->with()->inStoreKeyWithStoreKeyValue($storeKey);
    }
}
