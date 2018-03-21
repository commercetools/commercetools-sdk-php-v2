<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\ProductType\ProductTypeUpdateAction;

use Commercetools\Types\ProductType\ProductTypeAddPlainEnumValueAction;
use Commercetools\Types\ProductType\ProductTypeChangeLocalizedEnumValueLabelAction;
use Commercetools\Types\ProductType\ProductTypeChangeInputHintAction;
use Commercetools\Types\ProductType\ProductTypeSetInputTipAction;
use Commercetools\Types\ProductType\ProductTypeRemoveAttributeDefinitionAction;
use Commercetools\Types\ProductType\ProductTypeChangeNameAction;
use Commercetools\Types\ProductType\ProductTypeChangeIsSearchableAction;
use Commercetools\Types\ProductType\ProductTypeChangePlainEnumValueLabelAction;
use Commercetools\Types\ProductType\ProductTypeAddAttributeDefinitionAction;
use Commercetools\Types\ProductType\ProductTypeAddLocalizedEnumValueAction;
use Commercetools\Types\ProductType\ProductTypeChangeLocalizedEnumValueOrderAction;
use Commercetools\Types\ProductType\ProductTypeSetKeyAction;
use Commercetools\Types\ProductType\ProductTypeChangeDescriptionAction;
use Commercetools\Types\ProductType\ProductTypeChangeAttributeConstraintAction;
use Commercetools\Types\ProductType\ProductTypeChangeAttributeOrderAction;
use Commercetools\Types\ProductType\ProductTypeChangePlainEnumValueOrderAction;
use Commercetools\Types\ProductType\ProductTypeChangeLabelAction;
use Commercetools\Types\ProductType\ProductType;
use Commercetools\Types\ProductType\ProductTypeUpdate;


class ProductTypeUpdateBuilder extends BaseBuilder {
    /**
     * @var ProductType
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeAddPlainEnumValueAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addPlainEnumValue(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeAddPlainEnumValueAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeChangeLocalizedEnumValueLabelAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLocalizedEnumValueLabel(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeChangeLocalizedEnumValueLabelAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeChangeInputHintAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeInputHint(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeChangeInputHintAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeSetInputTipAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setInputTip(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeSetInputTipAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeRemoveAttributeDefinitionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeAttributeDefinition(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeRemoveAttributeDefinitionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeChangeNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeChangeIsSearchableAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeIsSearchable(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeChangeIsSearchableAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeChangePlainEnumValueLabelAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changePlainEnumValueLabel(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeChangePlainEnumValueLabelAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeAddAttributeDefinitionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addAttributeDefinition(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeAddAttributeDefinitionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeAddLocalizedEnumValueAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLocalizedEnumValue(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeAddLocalizedEnumValueAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeChangeLocalizedEnumValueOrderAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLocalizedEnumValueOrder(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeChangeLocalizedEnumValueOrderAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeSetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeSetKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeChangeDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeDescription(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeChangeDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeChangeAttributeConstraintAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAttributeConstraint(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeChangeAttributeConstraintAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeChangeAttributeOrderAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAttributeOrder(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeChangeAttributeOrderAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeChangePlainEnumValueOrderAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changePlainEnumValueOrder(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeChangePlainEnumValueOrderAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProductTypeChangeLabelAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLabel(callable $callback = null)
    {
        $action = $this->mapData(ProductTypeChangeLabelAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param ProductTypeUpdateAction $action
     * @return $this;
     */
    public function addAction(ProductTypeUpdateAction $action)
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
     * @param ProductType $productType
     * @return $this
     */
    public function with(ProductType $productType)
    {
        $this->resource = $productType;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    /**
     * Build ProductTypeUpdate and delete internal state
     * @return ProductTypeUpdate
     */
    public function build(): ProductTypeUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ProductTypeUpdate::class, $data);
        if ($update instanceof ProductTypeUpdate &&
            $this->resource instanceof ProductType
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }
}
