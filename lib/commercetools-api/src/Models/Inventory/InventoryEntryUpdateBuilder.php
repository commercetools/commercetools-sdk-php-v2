<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<InventoryEntryUpdate>
 */
final class InventoryEntryUpdateBuilder implements Builder
{
    /**
     * @var ?InventoryEntryUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    public function __construct()
    {
    }

    /**
     * @return null|InventoryEntryUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function withActions(?InventoryEntryUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function build(): InventoryEntryUpdate
    {
        return new InventoryEntryUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): InventoryEntryUpdateBuilder
    {
        return new self();
    }
}
