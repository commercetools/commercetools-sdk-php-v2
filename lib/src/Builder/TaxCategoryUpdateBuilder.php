<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\TaxCategory\TaxCategoryUpdateAction;

use Commercetools\Types\TaxCategory\TaxCategoryAddTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategoryChangeNameAction;
use Commercetools\Types\TaxCategory\TaxCategoryRemoveTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategoryReplaceTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategorySetDescriptionAction;
use Commercetools\Types\TaxCategory\TaxCategorySetKeyAction;
use Commercetools\Types\TaxCategory\TaxCategory;
use Commercetools\Types\TaxCategory\TaxCategoryUpdate;
use Commercetools\Request\ByProjectKeyTaxCategoriesByIDPost;


class TaxCategoryUpdateBuilder extends BaseBuilder {
    /**
     * @var TaxCategory
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
     * @param TaxCategoryAddTaxRateAction|callable $action builder function <code>
     *   function (TaxCategoryAddTaxRateAction $action): TaxCategoryAddTaxRateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addTaxRate($action = null)
    {
        $action = $this->resolveAction(TaxCategoryAddTaxRateAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TaxCategoryChangeNameAction|callable $action builder function <code>
     *   function (TaxCategoryChangeNameAction $action): TaxCategoryChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName($action = null)
    {
        $action = $this->resolveAction(TaxCategoryChangeNameAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TaxCategoryRemoveTaxRateAction|callable $action builder function <code>
     *   function (TaxCategoryRemoveTaxRateAction $action): TaxCategoryRemoveTaxRateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeTaxRate($action = null)
    {
        $action = $this->resolveAction(TaxCategoryRemoveTaxRateAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TaxCategoryReplaceTaxRateAction|callable $action builder function <code>
     *   function (TaxCategoryReplaceTaxRateAction $action): TaxCategoryReplaceTaxRateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function replaceTaxRate($action = null)
    {
        $action = $this->resolveAction(TaxCategoryReplaceTaxRateAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TaxCategorySetDescriptionAction|callable $action builder function <code>
     *   function (TaxCategorySetDescriptionAction $action): TaxCategorySetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription($action = null)
    {
        $action = $this->resolveAction(TaxCategorySetDescriptionAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TaxCategorySetKeyAction|callable $action builder function <code>
     *   function (TaxCategorySetKeyAction $action): TaxCategorySetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey($action = null)
    {
        $action = $this->resolveAction(TaxCategorySetKeyAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param TaxCategoryUpdateAction $action
     * @return $this;
     */
    public function addAction(TaxCategoryUpdateAction $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    private function resolveAction($class, $action = null) {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData($class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof $class) {
            throw new \InvalidArgumentException();
        }

        return $action;
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
     * @param TaxCategory $taxCategory
     * @return $this
     */
    public function with(TaxCategory $taxCategory)
    {
        $this->resource = $taxCategory;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?TaxCategory
    {
        return $this->resource;
    }

    /**
     * Build TaxCategoryUpdate
     * @return TaxCategoryUpdate
     */
    public function build(): TaxCategoryUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(TaxCategoryUpdate::class, $data);
        if ($update instanceof TaxCategoryUpdate &&
            $this->resource instanceof TaxCategory
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyTaxCategoriesByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
