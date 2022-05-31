<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntryUpdate extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_ACTIONS = 'actions';

    /**
     * <p>Expected version of the InventoryEntry on which the changes should be applied. If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> error will be returned.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Update actions to be performed on the InventoryEntry.</p>
     *
     * @return null|InventoryEntryUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?InventoryEntryUpdateActionCollection $actions
     */
    public function setActions(?InventoryEntryUpdateActionCollection $actions): void;
}
