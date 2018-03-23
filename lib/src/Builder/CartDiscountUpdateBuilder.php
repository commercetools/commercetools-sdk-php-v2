<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\CartDiscount\CartDiscountUpdateAction;

use Commercetools\Types\CartDiscount\CartDiscountChangeCartPredicateAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeIsActiveAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeNameAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeRequiresDiscountCodeAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeSortOrderAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeStackingModeAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeTargetAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeValueAction;
use Commercetools\Types\CartDiscount\CartDiscountSetCustomFieldAction;
use Commercetools\Types\CartDiscount\CartDiscountSetCustomTypeAction;
use Commercetools\Types\CartDiscount\CartDiscountSetDescriptionAction;
use Commercetools\Types\CartDiscount\CartDiscountSetValidFromAction;
use Commercetools\Types\CartDiscount\CartDiscountSetValidUntilAction;
use Commercetools\Types\CartDiscount\CartDiscount;
use Commercetools\Types\CartDiscount\CartDiscountUpdate;
use Commercetools\Request\ByProjectKeyCartDiscountsByIDPost;


class CartDiscountUpdateBuilder extends BaseBuilder {
    /**
     * @var CartDiscount
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
     * @param CartDiscountChangeCartPredicateAction|callable $action builder function <code>
     *   function (CartDiscountChangeCartPredicateAction $action): CartDiscountChangeCartPredicateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCartPredicate($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartDiscountChangeCartPredicateAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountChangeCartPredicateAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountChangeIsActiveAction|callable $action builder function <code>
     *   function (CartDiscountChangeIsActiveAction $action): CartDiscountChangeIsActiveAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeIsActive($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartDiscountChangeIsActiveAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountChangeIsActiveAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountChangeNameAction|callable $action builder function <code>
     *   function (CartDiscountChangeNameAction $action): CartDiscountChangeNameAction {
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
            $emptyAction = $this->mapData(CartDiscountChangeNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountChangeNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountChangeRequiresDiscountCodeAction|callable $action builder function <code>
     *   function (CartDiscountChangeRequiresDiscountCodeAction $action): CartDiscountChangeRequiresDiscountCodeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeRequiresDiscountCode($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartDiscountChangeRequiresDiscountCodeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountChangeRequiresDiscountCodeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountChangeSortOrderAction|callable $action builder function <code>
     *   function (CartDiscountChangeSortOrderAction $action): CartDiscountChangeSortOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeSortOrder($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartDiscountChangeSortOrderAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountChangeSortOrderAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountChangeStackingModeAction|callable $action builder function <code>
     *   function (CartDiscountChangeStackingModeAction $action): CartDiscountChangeStackingModeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeStackingMode($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartDiscountChangeStackingModeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountChangeStackingModeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountChangeTargetAction|callable $action builder function <code>
     *   function (CartDiscountChangeTargetAction $action): CartDiscountChangeTargetAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTarget($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartDiscountChangeTargetAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountChangeTargetAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountChangeValueAction|callable $action builder function <code>
     *   function (CartDiscountChangeValueAction $action): CartDiscountChangeValueAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeValue($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartDiscountChangeValueAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountChangeValueAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountSetCustomFieldAction|callable $action builder function <code>
     *   function (CartDiscountSetCustomFieldAction $action): CartDiscountSetCustomFieldAction {
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
            $emptyAction = $this->mapData(CartDiscountSetCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountSetCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountSetCustomTypeAction|callable $action builder function <code>
     *   function (CartDiscountSetCustomTypeAction $action): CartDiscountSetCustomTypeAction {
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
            $emptyAction = $this->mapData(CartDiscountSetCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountSetCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountSetDescriptionAction|callable $action builder function <code>
     *   function (CartDiscountSetDescriptionAction $action): CartDiscountSetDescriptionAction {
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
            $emptyAction = $this->mapData(CartDiscountSetDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountSetDescriptionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountSetValidFromAction|callable $action builder function <code>
     *   function (CartDiscountSetValidFromAction $action): CartDiscountSetValidFromAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setValidFrom($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartDiscountSetValidFromAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountSetValidFromAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartDiscountSetValidUntilAction|callable $action builder function <code>
     *   function (CartDiscountSetValidUntilAction $action): CartDiscountSetValidUntilAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setValidUntil($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartDiscountSetValidUntilAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartDiscountSetValidUntilAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
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
        return $action;
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

    public function getResource(): ?CartDiscount
    {
        return $this->resource;
    }

    /**
     * Build CartDiscountUpdate
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

    public function buildRequest(): ?ByProjectKeyCartDiscountsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
