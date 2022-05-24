<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntryReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded InventoryEntry. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for InventoryEntries.</p>
     *
     * @return null|InventoryEntry
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:InventoryEntry">InventoryEntry</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?InventoryEntry $obj
     */
    public function setObj(?InventoryEntry $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
