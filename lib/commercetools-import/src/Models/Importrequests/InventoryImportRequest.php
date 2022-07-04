<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Inventories\InventoryImportCollection;

interface InventoryImportRequest extends ImportRequest
{
    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The inventory import resources of this request.</p>
     *
     * @return null|InventoryImportCollection
     */
    public function getResources();

    /**
     * @param ?InventoryImportCollection $resources
     */
    public function setResources(?InventoryImportCollection $resources): void;
}
