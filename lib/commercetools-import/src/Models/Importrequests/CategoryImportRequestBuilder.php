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
use Commercetools\Import\Models\Categories\CategoryImportCollection;
use stdClass;

/**
 * @implements Builder<CategoryImportRequest>
 */
final class CategoryImportRequestBuilder implements Builder
{
    /**

     * @var ?CategoryImportCollection
     */
    private $resources;

    /**
     * <p>The category import resources of this request.</p>
     *

     * @return null|CategoryImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?CategoryImportCollection $resources
     * @return $this
     */
    public function withResources(?CategoryImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): CategoryImportRequest
    {
        return new CategoryImportRequestModel(
            $this->resources
        );
    }

    public static function of(): CategoryImportRequestBuilder
    {
        return new self();
    }
}
