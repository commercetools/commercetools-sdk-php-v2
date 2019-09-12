<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Producttypes\ProductTypeImportCollection;

/**
 * @implements Builder<ProductTypeImportRequest>
 */
final class ProductTypeImportRequestBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?ProductTypeImportCollection
     */
    private $resources;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>The individual product types to import.</p>.
     *
     * @return null|ProductTypeImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResources(?ProductTypeImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }

    public function build(): ProductTypeImportRequest
    {
        return new ProductTypeImportRequestModel(
            $this->type,
            $this->resources
        );
    }

    public static function of(): ProductTypeImportRequestBuilder
    {
        return new self();
    }
}
