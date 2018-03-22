<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Inventory\InventoryEntryUpdateAction;

use Commercetools\Types\Inventory\InventoryAddQuantityAction;
use Commercetools\Types\Inventory\InventoryChangeQuantityAction;
use Commercetools\Types\Inventory\InventoryRemoveQuantityAction;
use Commercetools\Types\Inventory\InventorySetCustomFieldAction;
use Commercetools\Types\Inventory\InventorySetCustomTypeAction;
use Commercetools\Types\Inventory\InventorySetExpectedDeliveryAction;
use Commercetools\Types\Inventory\InventorySetRestockableInDaysAction;
use Commercetools\Types\Inventory\InventorySetSupplyChannelAction;
use Commercetools\Types\Inventory\InventoryEntry;
use Commercetools\Types\Inventory\InventoryEntryUpdate;
use Commercetools\Request\ByProjectKeyInventoryByIDPost;


class InventoryEntryUpdateBuilder extends BaseBuilder {
    /**
     * @var InventoryEntry
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    private $requestBuilderCallback;

    public function __construct(callable $requestBuilderCallback = null)
    {
        $this->requestBuilderCallback = $requestBuilderCallback;
    }

    /**
     * @param callable $callback builder function <code>
     *   function (InventoryAddQuantityAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addQuantity(callable $callback = null)
    {
        $action = $this->mapData(InventoryAddQuantityAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (InventoryChangeQuantityAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeQuantity(callable $callback = null)
    {
        $action = $this->mapData(InventoryChangeQuantityAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (InventoryRemoveQuantityAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeQuantity(callable $callback = null)
    {
        $action = $this->mapData(InventoryRemoveQuantityAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (InventorySetCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField(callable $callback = null)
    {
        $action = $this->mapData(InventorySetCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (InventorySetCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType(callable $callback = null)
    {
        $action = $this->mapData(InventorySetCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (InventorySetExpectedDeliveryAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setExpectedDelivery(callable $callback = null)
    {
        $action = $this->mapData(InventorySetExpectedDeliveryAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (InventorySetRestockableInDaysAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setRestockableInDays(callable $callback = null)
    {
        $action = $this->mapData(InventorySetRestockableInDaysAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (InventorySetSupplyChannelAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setSupplyChannel(callable $callback = null)
    {
        $action = $this->mapData(InventorySetSupplyChannelAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param InventoryEntryUpdateAction $action
     * @return $this;
     */
    public function addAction(InventoryEntryUpdateAction $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    /*
     * @param $action
     * @param callable $callback
     */
    private function callback($action, callable $callback = null) {
        if (!is_null($callback)) {
            $action = $callback($action);
        }
        $this->actions[] = $action;
    }

    /**
     * @param InventoryEntry $inventoryEntry
     * @return $this
     */
    public function with(InventoryEntry $inventoryEntry)
    {
        $this->resource = $inventoryEntry;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?InventoryEntry
    {
        return $this->resource;
    }

    /**
     * Build InventoryEntryUpdate
     * @return InventoryEntryUpdate
     */
    public function build(): InventoryEntryUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(InventoryEntryUpdate::class, $data);
        if ($update instanceof InventoryEntryUpdate &&
            $this->resource instanceof InventoryEntry
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyInventoryByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
