<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
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
     * @param callable $callback builder function <code>
     *   function (ProductDiscountChangeIsActiveAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeIsActive(callable $callback = null)
    {
        $action = $this->mapData(ProductDiscountChangeIsActiveAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductDiscountChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(ProductDiscountChangeNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductDiscountChangePredicateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changePredicate(callable $callback = null)
    {
        $action = $this->mapData(ProductDiscountChangePredicateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductDiscountChangeSortOrderAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeSortOrder(callable $callback = null)
    {
        $action = $this->mapData(ProductDiscountChangeSortOrderAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductDiscountChangeValueAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeValue(callable $callback = null)
    {
        $action = $this->mapData(ProductDiscountChangeValueAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductDiscountSetDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription(callable $callback = null)
    {
        $action = $this->mapData(ProductDiscountSetDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductDiscountSetValidFromAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setValidFrom(callable $callback = null)
    {
        $action = $this->mapData(ProductDiscountSetValidFromAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductDiscountSetValidUntilAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setValidUntil(callable $callback = null)
    {
        $action = $this->mapData(ProductDiscountSetValidUntilAction::class, null);
        $this->callback($action, $callback);
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
