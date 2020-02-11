<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Products\ProductImportCollection;
use stdClass;

/**
 * @implements Builder<ProductImportRequest>
 */
final class ProductImportRequestBuilder implements Builder
{
    /**
     * @var ?ProductImportCollection
     */
    private $resources;

    /**
     * <p>The product import resources of this request.</p>
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
    public function withResources(?ProductImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): ProductImportRequest
    {
        return new ProductImportRequestModel(
            $this->resources
        );
    }

    public static function of(): ProductImportRequestBuilder
    {
        return new self();
    }
}
