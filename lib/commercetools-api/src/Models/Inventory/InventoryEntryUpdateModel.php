<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InventoryEntryUpdateModel extends JsonObjectModel implements InventoryEntryUpdate
{
    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?InventoryEntryUpdateActionCollection
     */
    protected $actions;


    public function __construct(
        int $version = null,
        InventoryEntryUpdateActionCollection $actions = null
    ) {
        $this->version = $version;
        $this->actions = $actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|InventoryEntryUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(self::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = InventoryEntryUpdateActionCollection::fromArray($data);
        }

        return $this->actions;
    }


    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setActions(?InventoryEntryUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }
}
