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
use Commercetools\Import\Models\Inventories\InventoryImportCollection;
use stdClass;

/**
 * @implements Builder<InventoryImportRequest>
 */
final class InventoryImportRequestBuilder implements Builder
{
    /**

     * @var ?InventoryImportCollection
     */
    private $resources;

    /**
     * <p>The inventory import resources of this request.</p>
     *

     * @return null|InventoryImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?InventoryImportCollection $resources
     * @return $this
     */
    public function withResources(?InventoryImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): InventoryImportRequest
    {
        return new InventoryImportRequestModel(
            $this->resources
        );
    }

    public static function of(): InventoryImportRequestBuilder
    {
        return new self();
    }
}
