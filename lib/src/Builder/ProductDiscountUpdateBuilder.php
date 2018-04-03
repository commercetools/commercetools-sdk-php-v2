<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductDiscount\ProductDiscountUpdateAction;

use Commercetools\Types\ProductDiscount\ProductDiscountChangeIsActiveAction;
use Commercetools\Types\ProductDiscount\ProductDiscountChangeNameAction;
use Commercetools\Types\ProductDiscount\ProductDiscountChangePredicateAction;
use Commercetools\Types\ProductDiscount\ProductDiscountChangeSortOrderAction;
use Commercetools\Types\ProductDiscount\ProductDiscountChangeValueAction;
use Commercetools\Types\ProductDiscount\ProductDiscountSetDescriptionAction;
use Commercetools\Types\ProductDiscount\ProductDiscountSetValidFromAction;
use Commercetools\Types\ProductDiscount\ProductDiscountSetValidUntilAction;
use Commercetools\Types\ProductDiscount\ProductDiscount;
use Commercetools\Types\ProductDiscount\ProductDiscountUpdate;
use Commercetools\Request\ByProjectKeyProductDiscountsByIDPost;


class ProductDiscountUpdateBuilder extends BaseBuilder {
    /**
     * @var ProductDiscount
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
     * @param ProductDiscountChangeIsActiveAction|callable $action builder function <code>
     *   function(ProductDiscountChangeIsActiveAction $action): ProductDiscountChangeIsActiveAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeIsActive($action = null)
    {
        $this->addAction($this->resolveAction(ProductDiscountChangeIsActiveAction::class, $action));
        return $this;
    }
    /**
     * @param ProductDiscountChangeNameAction|callable $action builder function <code>
     *   function(ProductDiscountChangeNameAction $action): ProductDiscountChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeName($action = null)
    {
        $this->addAction($this->resolveAction(ProductDiscountChangeNameAction::class, $action));
        return $this;
    }
    /**
     * @param ProductDiscountChangePredicateAction|callable $action builder function <code>
     *   function(ProductDiscountChangePredicateAction $action): ProductDiscountChangePredicateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changePredicate($action = null)
    {
        $this->addAction($this->resolveAction(ProductDiscountChangePredicateAction::class, $action));
        return $this;
    }
    /**
     * @param ProductDiscountChangeSortOrderAction|callable $action builder function <code>
     *   function(ProductDiscountChangeSortOrderAction $action): ProductDiscountChangeSortOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeSortOrder($action = null)
    {
        $this->addAction($this->resolveAction(ProductDiscountChangeSortOrderAction::class, $action));
        return $this;
    }
    /**
     * @param ProductDiscountChangeValueAction|callable $action builder function <code>
     *   function(ProductDiscountChangeValueAction $action): ProductDiscountChangeValueAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeValue($action = null)
    {
        $this->addAction($this->resolveAction(ProductDiscountChangeValueAction::class, $action));
        return $this;
    }
    /**
     * @param ProductDiscountSetDescriptionAction|callable $action builder function <code>
     *   function(ProductDiscountSetDescriptionAction $action): ProductDiscountSetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setDescription($action = null)
    {
        $this->addAction($this->resolveAction(ProductDiscountSetDescriptionAction::class, $action));
        return $this;
    }
    /**
     * @param ProductDiscountSetValidFromAction|callable $action builder function <code>
     *   function(ProductDiscountSetValidFromAction $action): ProductDiscountSetValidFromAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setValidFrom($action = null)
    {
        $this->addAction($this->resolveAction(ProductDiscountSetValidFromAction::class, $action));
        return $this;
    }
    /**
     * @param ProductDiscountSetValidUntilAction|callable $action builder function <code>
     *   function(ProductDiscountSetValidUntilAction $action): ProductDiscountSetValidUntilAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setValidUntil($action = null)
    {
        $this->addAction($this->resolveAction(ProductDiscountSetValidUntilAction::class, $action));
        return $this;
    }

    /**
     * @param ProductDiscountUpdateAction $action
     * @return $this;
     */
    public function addAction(ProductDiscountUpdateAction $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    /**
     * @param $class
     * @param $action
     * @return ProductDiscountUpdateAction
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
     * @param ProductDiscount $productDiscount
     * @return $this
     */
    public function with(ProductDiscount $productDiscount)
    {
        $this->resource = $productDiscount;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?ProductDiscount
    {
        return $this->resource;
    }

    /**
     * Build ProductDiscountUpdate
     * @return ProductDiscountUpdate
     */
    public function build(): ProductDiscountUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ProductDiscountUpdate::class, $data);
        if ($update instanceof ProductDiscountUpdate &&
            $this->resource instanceof ProductDiscount
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyProductDiscountsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
