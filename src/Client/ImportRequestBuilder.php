<?php

namespace Commercetools\Client;

use Commercetools\Import\Client\ImportRequestBuilder as Builder;
use Commercetools\Import\Client\Resource;
use Commercetools\Import\Client\Resource\ResourceByProjectKey;
use GuzzleHttp\ClientInterface;

class ImportRequestBuilder extends Builder
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
        return $this->withProjectKeyValue($this->projectKey);
    }


    public function categories(): Resource\ResourceByProjectKeyCategories
    {
        return $this->with()->categories();
    }

    public function customers(): Resource\ResourceByProjectKeyCustomers
    {
        return $this->with()->customers();
    }

    public function importContainers(): Resource\ResourceByProjectKeyImportContainers
    {
        return $this->with()->importContainers();
    }

    public function importOperations(): Resource\ResourceByProjectKeyImportOperations
    {
        return $this->with()->importOperations();
    }

    public function inventories(): Resource\ResourceByProjectKeyInventories
    {
        return $this->with()->inventories();
    }

    public function orderPatches(): Resource\ResourceByProjectKeyOrderPatches
    {
        return $this->with()->orderPatches();
    }

    public function orders(): Resource\ResourceByProjectKeyOrders
    {
        return $this->with()->orders();
    }

    public function prices(): Resource\ResourceByProjectKeyPrices
    {
        return $this->with()->prices();
    }

    public function productDrafts(): Resource\ResourceByProjectKeyProductDrafts
    {
        return $this->with()->productDrafts();
    }

    public function productVariantPatches(): Resource\ResourceByProjectKeyProductVariantPatches
    {
        return $this->with()->productVariantPatches();
    }

    public function productVariants(): Resource\ResourceByProjectKeyProductVariants
    {
        return $this->with()->productVariants();
    }

    public function products(): Resource\ResourceByProjectKeyProducts
    {
        return $this->with()->products();
    }

    public function productTypes(): Resource\ResourceByProjectKeyProductTypes
    {
        return $this->with()->productTypes();
    }
}
