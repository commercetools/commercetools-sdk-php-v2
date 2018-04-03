<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\InvalidArgumentException;
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
     *   function(ShoppingListAddLineItemAction $action): ShoppingListAddLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function addLineItem($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListAddLineItemAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListAddTextLineItemAction|callable $action builder function <code>
     *   function(ShoppingListAddTextLineItemAction $action): ShoppingListAddTextLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function addTextLineItem($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListAddTextLineItemAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListChangeLineItemQuantityAction|callable $action builder function <code>
     *   function(ShoppingListChangeLineItemQuantityAction $action): ShoppingListChangeLineItemQuantityAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeLineItemQuantity($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListChangeLineItemQuantityAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListChangeLineItemsOrderAction|callable $action builder function <code>
     *   function(ShoppingListChangeLineItemsOrderAction $action): ShoppingListChangeLineItemsOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeLineItemsOrder($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListChangeLineItemsOrderAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListChangeNameAction|callable $action builder function <code>
     *   function(ShoppingListChangeNameAction $action): ShoppingListChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeName($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListChangeNameAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListChangeTextLineItemNameAction|callable $action builder function <code>
     *   function(ShoppingListChangeTextLineItemNameAction $action): ShoppingListChangeTextLineItemNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeTextLineItemName($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListChangeTextLineItemNameAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListChangeTextLineItemQuantityAction|callable $action builder function <code>
     *   function(ShoppingListChangeTextLineItemQuantityAction $action): ShoppingListChangeTextLineItemQuantityAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeTextLineItemQuantity($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListChangeTextLineItemQuantityAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListChangeTextLineItemsOrderAction|callable $action builder function <code>
     *   function(ShoppingListChangeTextLineItemsOrderAction $action): ShoppingListChangeTextLineItemsOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeTextLineItemsOrder($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListChangeTextLineItemsOrderAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListRemoveLineItemAction|callable $action builder function <code>
     *   function(ShoppingListRemoveLineItemAction $action): ShoppingListRemoveLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function removeLineItem($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListRemoveLineItemAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListRemoveTextLineItemAction|callable $action builder function <code>
     *   function(ShoppingListRemoveTextLineItemAction $action): ShoppingListRemoveTextLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function removeTextLineItem($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListRemoveTextLineItemAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetCustomFieldAction|callable $action builder function <code>
     *   function(ShoppingListSetCustomFieldAction $action): ShoppingListSetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCustomField($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetCustomTypeAction|callable $action builder function <code>
     *   function(ShoppingListSetCustomTypeAction $action): ShoppingListSetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCustomType($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetCustomerAction|callable $action builder function <code>
     *   function(ShoppingListSetCustomerAction $action): ShoppingListSetCustomerAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCustomer($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetCustomerAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetDeleteDaysAfterLastModificationAction|callable $action builder function <code>
     *   function(ShoppingListSetDeleteDaysAfterLastModificationAction $action): ShoppingListSetDeleteDaysAfterLastModificationAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setDeleteDaysAfterLastModification($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetDeleteDaysAfterLastModificationAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetDescriptionAction|callable $action builder function <code>
     *   function(ShoppingListSetDescriptionAction $action): ShoppingListSetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setDescription($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetDescriptionAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetKeyAction|callable $action builder function <code>
     *   function(ShoppingListSetKeyAction $action): ShoppingListSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setKey($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetKeyAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetLineItemCustomFieldAction|callable $action builder function <code>
     *   function(ShoppingListSetLineItemCustomFieldAction $action): ShoppingListSetLineItemCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setLineItemCustomField($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetLineItemCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetLineItemCustomTypeAction|callable $action builder function <code>
     *   function(ShoppingListSetLineItemCustomTypeAction $action): ShoppingListSetLineItemCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setLineItemCustomType($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetLineItemCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetSlugAction|callable $action builder function <code>
     *   function(ShoppingListSetSlugAction $action): ShoppingListSetSlugAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setSlug($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetSlugAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetTextLineItemCustomFieldAction|callable $action builder function <code>
     *   function(ShoppingListSetTextLineItemCustomFieldAction $action): ShoppingListSetTextLineItemCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setTextLineItemCustomField($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetTextLineItemCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetTextLineItemCustomTypeAction|callable $action builder function <code>
     *   function(ShoppingListSetTextLineItemCustomTypeAction $action): ShoppingListSetTextLineItemCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setTextLineItemCustomType($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetTextLineItemCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param ShoppingListSetTextLineItemDescriptionAction|callable $action builder function <code>
     *   function(ShoppingListSetTextLineItemDescriptionAction $action): ShoppingListSetTextLineItemDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setTextLineItemDescription($action = null)
    {
        $this->addAction($this->resolveAction(ShoppingListSetTextLineItemDescriptionAction::class, $action));
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

    /**
     * @param $class
     * @param $action
     * @return ShoppingListUpdateAction
     * @throws InvalidArgumentException
     */
    private function resolveAction($class, $action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData($class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if ($action instanceof $class) {
            return $action;
        }

        throw new InvalidArgumentException(
            sprintf('Expected method to be called with or callable to return %s', $class)
        );
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
