<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\TaxCategory\TaxCategoryUpdateAction;

use Commercetools\Types\TaxCategory\TaxCategoryAddTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategorySetDescriptionAction;
use Commercetools\Types\TaxCategory\TaxCategoryChangeNameAction;
use Commercetools\Types\TaxCategory\TaxCategorySetKeyAction;
use Commercetools\Types\TaxCategory\TaxCategoryReplaceTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategoryRemoveTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategory;
use Commercetools\Types\TaxCategory\TaxCategoryUpdate;


class TaxCategoryUpdateBuilder extends BaseBuilder {
    /**
     * @var TaxCategory
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (TaxCategoryAddTaxRateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addTaxRate(callable $callback = null)
    {
        $action = $this->mapData(TaxCategoryAddTaxRateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TaxCategorySetDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription(callable $callback = null)
    {
        $action = $this->mapData(TaxCategorySetDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TaxCategoryChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(TaxCategoryChangeNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TaxCategorySetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey(callable $callback = null)
    {
        $action = $this->mapData(TaxCategorySetKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TaxCategoryReplaceTaxRateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function replaceTaxRate(callable $callback = null)
    {
        $action = $this->mapData(TaxCategoryReplaceTaxRateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TaxCategoryRemoveTaxRateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeTaxRate(callable $callback = null)
    {
        $action = $this->mapData(TaxCategoryRemoveTaxRateAction::class, null);
        $this->callback($action, $callback);
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

    /**
     * Build TaxCategoryUpdate and delete internal state
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
}
