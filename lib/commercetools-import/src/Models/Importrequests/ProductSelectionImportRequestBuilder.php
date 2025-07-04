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
use Commercetools\Import\Models\ProductSelections\ProductSelectionImportCollection;
use stdClass;

/**
 * @implements Builder<ProductSelectionImportRequest>
 */
final class ProductSelectionImportRequestBuilder implements Builder
{
    /**

     * @var ?ProductSelectionImportCollection
     */
    private $resources;

    /**
     * <p>The Product Selection import resources of this request.</p>
     *

     * @return null|ProductSelectionImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?ProductSelectionImportCollection $resources
     * @return $this
     */
    public function withResources(?ProductSelectionImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): ProductSelectionImportRequest
    {
        return new ProductSelectionImportRequestModel(
            $this->resources
        );
    }

    public static function of(): ProductSelectionImportRequestBuilder
    {
        return new self();
    }
}
