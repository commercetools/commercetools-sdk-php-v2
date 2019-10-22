<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKey extends ApiResource
{
    public function importSinks(): ResourceByProjectKeyImportSinks
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyImportSinks($this->getUri().'/import-sinks', $args, $this->getClient());
    }

    public function categories(): ResourceByProjectKeyCategories
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCategories($this->getUri().'/categories', $args, $this->getClient());
    }

    public function prices(): ResourceByProjectKeyPrices
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyPrices($this->getUri().'/prices', $args, $this->getClient());
    }

    public function products(): ResourceByProjectKeyProducts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProducts($this->getUri().'/products', $args, $this->getClient());
    }

    public function productTypes(): ResourceByProjectKeyProductTypes
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductTypes($this->getUri().'/product-types', $args, $this->getClient());
    }

    public function productVariants(): ResourceByProjectKeyProductVariants
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductVariants($this->getUri().'/product-variants', $args, $this->getClient());
    }

    public function productVariantPatches(): ResourceByProjectKeyProductVariantPatches
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductVariantPatches($this->getUri().'/product-variant-patches', $args, $this->getClient());
    }
}
