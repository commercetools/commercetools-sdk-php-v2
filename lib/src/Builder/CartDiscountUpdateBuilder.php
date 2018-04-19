<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\InvalidArgumentException;
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


class CartDiscountUpdateBuilder extends BaseBuilder
{
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
     *   function(CartDiscountChangeCartPredicateAction $action): CartDiscountChangeCartPredicateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeCartPredicate($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountChangeCartPredicateAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountChangeIsActiveAction|callable $action builder function <code>
     *   function(CartDiscountChangeIsActiveAction $action): CartDiscountChangeIsActiveAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeIsActive($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountChangeIsActiveAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountChangeNameAction|callable $action builder function <code>
     *   function(CartDiscountChangeNameAction $action): CartDiscountChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeName($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountChangeNameAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountChangeRequiresDiscountCodeAction|callable $action builder function <code>
     *   function(CartDiscountChangeRequiresDiscountCodeAction $action): CartDiscountChangeRequiresDiscountCodeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeRequiresDiscountCode($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountChangeRequiresDiscountCodeAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountChangeSortOrderAction|callable $action builder function <code>
     *   function(CartDiscountChangeSortOrderAction $action): CartDiscountChangeSortOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeSortOrder($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountChangeSortOrderAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountChangeStackingModeAction|callable $action builder function <code>
     *   function(CartDiscountChangeStackingModeAction $action): CartDiscountChangeStackingModeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeStackingMode($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountChangeStackingModeAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountChangeTargetAction|callable $action builder function <code>
     *   function(CartDiscountChangeTargetAction $action): CartDiscountChangeTargetAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeTarget($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountChangeTargetAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountChangeValueAction|callable $action builder function <code>
     *   function(CartDiscountChangeValueAction $action): CartDiscountChangeValueAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeValue($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountChangeValueAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountSetCustomFieldAction|callable $action builder function <code>
     *   function(CartDiscountSetCustomFieldAction $action): CartDiscountSetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCustomField($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountSetCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountSetCustomTypeAction|callable $action builder function <code>
     *   function(CartDiscountSetCustomTypeAction $action): CartDiscountSetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCustomType($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountSetCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountSetDescriptionAction|callable $action builder function <code>
     *   function(CartDiscountSetDescriptionAction $action): CartDiscountSetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setDescription($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountSetDescriptionAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountSetValidFromAction|callable $action builder function <code>
     *   function(CartDiscountSetValidFromAction $action): CartDiscountSetValidFromAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setValidFrom($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountSetValidFromAction::class, $action));
        return $this;
    }
    /**
     * @param CartDiscountSetValidUntilAction|callable $action builder function <code>
     *   function(CartDiscountSetValidUntilAction $action): CartDiscountSetValidUntilAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setValidUntil($action = null)
    {
        $this->addAction($this->resolveAction(CartDiscountSetValidUntilAction::class, $action));
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

    /**
     * @param $class
     * @param $action
     * @return CartDiscountUpdateAction
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
