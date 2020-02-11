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
use stdClass;
use Commercetools\Import\Models\Producttypes\ProductTypeImportCollection;

/**
 * @implements Builder<ProductTypeImportRequest>
 */
final class ProductTypeImportRequestBuilder implements Builder
{
    /**
     * @var ?ProductTypeImportCollection
     */
    private $resources;

    /**
     * <p>The product type import resources of this request.</p>
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
    public function withResources(?ProductTypeImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): ProductTypeImportRequest
    {
        return new ProductTypeImportRequestModel(
            $this->resources
        );
    }

    public static function of(): ProductTypeImportRequestBuilder
    {
        return new self();
    }
}
