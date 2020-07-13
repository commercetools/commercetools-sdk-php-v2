<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Inventory\InventoryEntry;
use Commercetools\Api\Models\Inventory\InventoryEntryModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InventoryEntryCreatedMessagePayloadModel extends JsonObjectModel implements InventoryEntryCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'InventoryEntryCreated';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?InventoryEntry
     */
    protected $inventoryEntry;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?InventoryEntry $inventoryEntry = null
    ) {
        $this->inventoryEntry = $inventoryEntry;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|InventoryEntry
     */
    public function getInventoryEntry()
    {
        if (is_null($this->inventoryEntry)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_INVENTORY_ENTRY);
            if (is_null($data)) {
                return null;
            }

            $this->inventoryEntry = InventoryEntryModel::of($data);
        }

        return $this->inventoryEntry;
    }


    /**
     * @param ?InventoryEntry $inventoryEntry
     */
    public function setInventoryEntry(?InventoryEntry $inventoryEntry): void
    {
        $this->inventoryEntry = $inventoryEntry;
    }
}
