<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\ShoppingList\ShoppingListUpdateAction;

use Commercetools\Types\ShoppingList\ShoppingListAddLineItemAction;
use Commercetools\Types\ShoppingList\ShoppingListAddTextLineItemAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeLineItemQuantityAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeLineItemsOrderAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeNameAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeTextLineItemNameAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeTextLineItemQuantityAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeTextLineItemsOrderAction;
use Commercetools\Types\ShoppingList\ShoppingListRemoveLineItemAction;
use Commercetools\Types\ShoppingList\ShoppingListRemoveTextLineItemAction;
use Commercetools\Types\ShoppingList\ShoppingListSetCustomFieldAction;
use Commercetools\Types\ShoppingList\ShoppingListSetCustomTypeAction;
use Commercetools\Types\ShoppingList\ShoppingListSetCustomerAction;
use Commercetools\Types\ShoppingList\ShoppingListSetDeleteDaysAfterLastModificationAction;
use Commercetools\Types\ShoppingList\ShoppingListSetDescriptionAction;
use Commercetools\Types\ShoppingList\ShoppingListSetKeyAction;
use Commercetools\Types\ShoppingList\ShoppingListSetLineItemCustomFieldAction;
use Commercetools\Types\ShoppingList\ShoppingListSetLineItemCustomTypeAction;
use Commercetools\Types\ShoppingList\ShoppingListSetSlugAction;
use Commercetools\Types\ShoppingList\ShoppingListSetTextLineItemCustomFieldAction;
use Commercetools\Types\ShoppingList\ShoppingListSetTextLineItemCustomTypeAction;
use Commercetools\Types\ShoppingList\ShoppingListSetTextLineItemDescriptionAction;
use Commercetools\Types\ShoppingList\ShoppingList;
use Commercetools\Types\ShoppingList\ShoppingListUpdate;
use Commercetools\Request\ByProjectKeyShoppingListsByIDPost;


class ShoppingListUpdateBuilder extends BaseBuilder {
    /**
     * @var ShoppingList
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
     * @param ShoppingListAddLineItemAction|callable $action builder function <code>
     *   function (ShoppingListAddLineItemAction $action): ShoppingListAddLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLineItem($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListAddLineItemAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListAddLineItemAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListAddTextLineItemAction|callable $action builder function <code>
     *   function (ShoppingListAddTextLineItemAction $action): ShoppingListAddTextLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addTextLineItem($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListAddTextLineItemAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListAddTextLineItemAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListChangeLineItemQuantityAction|callable $action builder function <code>
     *   function (ShoppingListChangeLineItemQuantityAction $action): ShoppingListChangeLineItemQuantityAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLineItemQuantity($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListChangeLineItemQuantityAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListChangeLineItemQuantityAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListChangeLineItemsOrderAction|callable $action builder function <code>
     *   function (ShoppingListChangeLineItemsOrderAction $action): ShoppingListChangeLineItemsOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLineItemsOrder($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListChangeLineItemsOrderAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListChangeLineItemsOrderAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListChangeNameAction|callable $action builder function <code>
     *   function (ShoppingListChangeNameAction $action): ShoppingListChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListChangeNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListChangeNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListChangeTextLineItemNameAction|callable $action builder function <code>
     *   function (ShoppingListChangeTextLineItemNameAction $action): ShoppingListChangeTextLineItemNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTextLineItemName($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListChangeTextLineItemNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListChangeTextLineItemNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListChangeTextLineItemQuantityAction|callable $action builder function <code>
     *   function (ShoppingListChangeTextLineItemQuantityAction $action): ShoppingListChangeTextLineItemQuantityAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTextLineItemQuantity($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListChangeTextLineItemQuantityAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListChangeTextLineItemQuantityAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListChangeTextLineItemsOrderAction|callable $action builder function <code>
     *   function (ShoppingListChangeTextLineItemsOrderAction $action): ShoppingListChangeTextLineItemsOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTextLineItemsOrder($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListChangeTextLineItemsOrderAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListChangeTextLineItemsOrderAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListRemoveLineItemAction|callable $action builder function <code>
     *   function (ShoppingListRemoveLineItemAction $action): ShoppingListRemoveLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeLineItem($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListRemoveLineItemAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListRemoveLineItemAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListRemoveTextLineItemAction|callable $action builder function <code>
     *   function (ShoppingListRemoveTextLineItemAction $action): ShoppingListRemoveTextLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeTextLineItem($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListRemoveTextLineItemAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListRemoveTextLineItemAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetCustomFieldAction|callable $action builder function <code>
     *   function (ShoppingListSetCustomFieldAction $action): ShoppingListSetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetCustomTypeAction|callable $action builder function <code>
     *   function (ShoppingListSetCustomTypeAction $action): ShoppingListSetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetCustomerAction|callable $action builder function <code>
     *   function (ShoppingListSetCustomerAction $action): ShoppingListSetCustomerAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomer($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetCustomerAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetCustomerAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetDeleteDaysAfterLastModificationAction|callable $action builder function <code>
     *   function (ShoppingListSetDeleteDaysAfterLastModificationAction $action): ShoppingListSetDeleteDaysAfterLastModificationAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDeleteDaysAfterLastModification($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetDeleteDaysAfterLastModificationAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetDeleteDaysAfterLastModificationAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetDescriptionAction|callable $action builder function <code>
     *   function (ShoppingListSetDescriptionAction $action): ShoppingListSetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetDescriptionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetKeyAction|callable $action builder function <code>
     *   function (ShoppingListSetKeyAction $action): ShoppingListSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetKeyAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetKeyAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetLineItemCustomFieldAction|callable $action builder function <code>
     *   function (ShoppingListSetLineItemCustomFieldAction $action): ShoppingListSetLineItemCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomField($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetLineItemCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetLineItemCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetLineItemCustomTypeAction|callable $action builder function <code>
     *   function (ShoppingListSetLineItemCustomTypeAction $action): ShoppingListSetLineItemCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomType($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetLineItemCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetLineItemCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetSlugAction|callable $action builder function <code>
     *   function (ShoppingListSetSlugAction $action): ShoppingListSetSlugAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setSlug($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetSlugAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetSlugAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetTextLineItemCustomFieldAction|callable $action builder function <code>
     *   function (ShoppingListSetTextLineItemCustomFieldAction $action): ShoppingListSetTextLineItemCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTextLineItemCustomField($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetTextLineItemCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetTextLineItemCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetTextLineItemCustomTypeAction|callable $action builder function <code>
     *   function (ShoppingListSetTextLineItemCustomTypeAction $action): ShoppingListSetTextLineItemCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTextLineItemCustomType($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetTextLineItemCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetTextLineItemCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ShoppingListSetTextLineItemDescriptionAction|callable $action builder function <code>
     *   function (ShoppingListSetTextLineItemDescriptionAction $action): ShoppingListSetTextLineItemDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTextLineItemDescription($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ShoppingListSetTextLineItemDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ShoppingListSetTextLineItemDescriptionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param ShoppingListUpdateAction $action
     * @return $this;
     */
    public function addAction(ShoppingListUpdateAction $action)
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
        return $action;
    }

    /**
     * @param ShoppingList $shoppingList
     * @return $this
     */
    public function with(ShoppingList $shoppingList)
    {
        $this->resource = $shoppingList;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?ShoppingList
    {
        return $this->resource;
    }

    /**
     * Build ShoppingListUpdate
     * @return ShoppingListUpdate
     */
    public function build(): ShoppingListUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ShoppingListUpdate::class, $data);
        if ($update instanceof ShoppingListUpdate &&
            $this->resource instanceof ShoppingList
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyShoppingListsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
