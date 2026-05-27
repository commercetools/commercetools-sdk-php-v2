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
use Commercetools\Import\Models\ProductTailoring\ProductTailoringImportCollection;
use stdClass;

/**
 * @implements Builder<ProductTailoringImportRequest>
 */
final class ProductTailoringImportRequestBuilder implements Builder
{
    /**

     * @var ?ProductTailoringImportCollection
     */
    private $resources;

    /**
     * <p>The Product Tailoring import resources of this request.</p>
     *

     * @return null|ProductTailoringImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?ProductTailoringImportCollection $resources
     * @return $this
     */
    public function withResources(?ProductTailoringImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): ProductTailoringImportRequest
    {
        return new ProductTailoringImportRequestModel(
            $this->resources
        );
    }

    public static function of(): ProductTailoringImportRequestBuilder
    {
        return new self();
    }
}
