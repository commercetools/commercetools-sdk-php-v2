<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<InventoryEntryUpdateAction>
 */
final class InventoryEntryUpdateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

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
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    public function build(): InventoryEntryUpdateAction
    {
        return new InventoryEntryUpdateActionModel(
            $this->action
        );
    }

    public static function of(): InventoryEntryUpdateActionBuilder
    {
        return new self();
    }
}
