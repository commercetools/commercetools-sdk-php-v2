<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\CartDiscount\CartDiscountUpdateAction;

use Commercetools\Types\CartDiscount\CartDiscountSetCustomTypeAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeTargetAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeSortOrderAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeRequiresDiscountCodeAction;
use Commercetools\Types\CartDiscount\CartDiscountSetValidUntilAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeValueAction;
use Commercetools\Types\CartDiscount\CartDiscountSetDescriptionAction;
use Commercetools\Types\CartDiscount\CartDiscountSetValidFromAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeIsActiveAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeStackingModeAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeCartPredicateAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeNameAction;
use Commercetools\Types\CartDiscount\CartDiscountSetCustomFieldAction;
use Commercetools\Types\CartDiscount\CartDiscount;
use Commercetools\Types\CartDiscount\CartDiscountUpdate;


class CartDiscountUpdateBuilder extends BaseBuilder {
    /**
     * @var CartDiscount
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountSetCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountSetCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountChangeTargetAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTarget(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountChangeTargetAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountChangeSortOrderAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeSortOrder(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountChangeSortOrderAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountChangeRequiresDiscountCodeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeRequiresDiscountCode(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountChangeRequiresDiscountCodeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountSetValidUntilAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setValidUntil(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountSetValidUntilAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountChangeValueAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeValue(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountChangeValueAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountSetDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountSetDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountSetValidFromAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setValidFrom(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountSetValidFromAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountChangeIsActiveAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeIsActive(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountChangeIsActiveAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountChangeStackingModeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeStackingMode(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountChangeStackingModeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountChangeCartPredicateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCartPredicate(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountChangeCartPredicateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountChangeNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartDiscountSetCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField(callable $callback = null)
    {
        $action = $this->mapData(CartDiscountSetCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param CartDiscountUpdateAction $action
     * @return $this;
     */
    public function addAction(CartDiscountUpdateAction $action)
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
     * @param CartDiscount $cartDiscount
     * @return $this
     */
    public function with(CartDiscount $cartDiscount)
    {
        $this->resource = $cartDiscount;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    /**
     * Build CartDiscountUpdate and delete internal state
     * @return CartDiscountUpdate
     */
    public function build(): CartDiscountUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(CartDiscountUpdate::class, $data);
        if ($update instanceof CartDiscountUpdate &&
            $this->resource instanceof CartDiscount
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }
}
