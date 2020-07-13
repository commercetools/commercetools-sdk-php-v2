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
use Commercetools\Import\Models\Productdrafts\ProductDraftImportCollection;
use stdClass;

/**
 * @implements Builder<ProductDraftImportRequest>
 */
final class ProductDraftImportRequestBuilder implements Builder
{
    /**
     * @var ?ProductDraftImportCollection
     */
    private $resources;

    /**
     * <p>The product draft import resources of this request.</p>
     *
     * @return null|ProductDraftImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?ProductDraftImportCollection $resources
     * @return $this
     */
    public function withResources(?ProductDraftImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): ProductDraftImportRequest
    {
        return new ProductDraftImportRequestModel(
            $this->resources
        );
    }

    public static function of(): ProductDraftImportRequestBuilder
    {
        return new self();
    }
}
