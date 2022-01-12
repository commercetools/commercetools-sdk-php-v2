<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

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
     * @deprecated
     */
    public function importSinks(): ResourceByProjectKeyImportSinks
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyImportSinks($args, $this->getClient());
    }
    /**
     * @deprecated
     */
    public function importSummaries(): ResourceByProjectKeyImportSummaries
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyImportSummaries($args, $this->getClient());
    }
    /**
     */
    public function importContainers(): ResourceByProjectKeyImportContainers
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyImportContainers($args, $this->getClient());
    }
    /**
     */
    public function importOperations(): ResourceByProjectKeyImportOperations
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyImportOperations($args, $this->getClient());
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
    public function prices(): ResourceByProjectKeyPrices
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyPrices($args, $this->getClient());
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
    public function productDrafts(): ResourceByProjectKeyProductDrafts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductDrafts($args, $this->getClient());
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
    public function productVariants(): ResourceByProjectKeyProductVariants
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductVariants($args, $this->getClient());
    }
    /**
     */
    public function productVariantPatches(): ResourceByProjectKeyProductVariantPatches
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductVariantPatches($args, $this->getClient());
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
    public function orderPatches(): ResourceByProjectKeyOrderPatches
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyOrderPatches($args, $this->getClient());
    }
    /**
     */
    public function customers(): ResourceByProjectKeyCustomers
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomers($args, $this->getClient());
    }
}
