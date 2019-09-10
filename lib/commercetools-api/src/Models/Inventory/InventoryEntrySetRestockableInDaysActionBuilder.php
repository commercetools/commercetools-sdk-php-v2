<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<InventoryEntrySetRestockableInDaysAction>
 */
final class InventoryEntrySetRestockableInDaysActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?int
     */
    private $restockableInDays;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|int
     */
    public function getRestockableInDays()
    {
        return $this->restockableInDays;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRestockableInDays(?int $restockableInDays)
    {
        $this->restockableInDays = $restockableInDays;

        return $this;
    }

    public function build(): InventoryEntrySetRestockableInDaysAction
    {
        return new InventoryEntrySetRestockableInDaysActionModel(
            $this->action,
            $this->restockableInDays
        );
    }

    public static function of(): InventoryEntrySetRestockableInDaysActionBuilder
    {
        return new self();
    }
}
