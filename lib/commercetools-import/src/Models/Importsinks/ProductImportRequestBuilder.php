<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Products\ProductImportCollection;

/**
 * @implements Builder<ProductImportRequest>
 */
final class ProductImportRequestBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?ProductImportCollection
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
     * <p>The individual products to import.</p>.
     *
     * @return null|ProductImportCollection
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
    public function withResources(?ProductImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }

    public function build(): ProductImportRequest
    {
        return new ProductImportRequestModel(
            $this->type,
            $this->resources
        );
    }

    public static function of(): ProductImportRequestBuilder
    {
        return new self();
    }
}
