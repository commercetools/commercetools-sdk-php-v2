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
     * @param callable $callback builder function <code>
     *   function (ShoppingListAddLineItemAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLineItem(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListAddLineItemAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListAddTextLineItemAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addTextLineItem(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListAddTextLineItemAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListChangeLineItemQuantityAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLineItemQuantity(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListChangeLineItemQuantityAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListChangeLineItemsOrderAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLineItemsOrder(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListChangeLineItemsOrderAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListChangeNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListChangeTextLineItemNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTextLineItemName(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListChangeTextLineItemNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListChangeTextLineItemQuantityAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTextLineItemQuantity(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListChangeTextLineItemQuantityAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListChangeTextLineItemsOrderAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTextLineItemsOrder(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListChangeTextLineItemsOrderAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListRemoveLineItemAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeLineItem(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListRemoveLineItemAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListRemoveTextLineItemAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeTextLineItem(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListRemoveTextLineItemAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetCustomerAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomer(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetCustomerAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetDeleteDaysAfterLastModificationAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDeleteDaysAfterLastModification(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetDeleteDaysAfterLastModificationAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetLineItemCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomField(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetLineItemCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetLineItemCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomType(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetLineItemCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetSlugAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setSlug(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetSlugAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetTextLineItemCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTextLineItemCustomField(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetTextLineItemCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetTextLineItemCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTextLineItemCustomType(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetTextLineItemCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ShoppingListSetTextLineItemDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTextLineItemDescription(callable $callback = null)
    {
        $action = $this->mapData(ShoppingListSetTextLineItemDescriptionAction::class, null);
        $this->callback($action, $callback);
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
        $this->actions[] = $action;
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
