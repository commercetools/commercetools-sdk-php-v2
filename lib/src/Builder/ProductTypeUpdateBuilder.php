<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\ProductType\ProductTypeUpdateAction;

use Commercetools\Types\ProductType\ProductTypeAddAttributeDefinitionAction;
use Commercetools\Types\ProductType\ProductTypeAddLocalizedEnumValueAction;
use Commercetools\Types\ProductType\ProductTypeAddPlainEnumValueAction;
use Commercetools\Types\ProductType\ProductTypeChangeAttributeConstraintAction;
use Commercetools\Types\ProductType\ProductTypeChangeAttributeOrderAction;
use Commercetools\Types\ProductType\ProductTypeChangeDescriptionAction;
use Commercetools\Types\ProductType\ProductTypeChangeInputHintAction;
use Commercetools\Types\ProductType\ProductTypeChangeIsSearchableAction;
use Commercetools\Types\ProductType\ProductTypeChangeLabelAction;
use Commercetools\Types\ProductType\ProductTypeChangeLocalizedEnumValueLabelAction;
use Commercetools\Types\ProductType\ProductTypeChangeLocalizedEnumValueOrderAction;
use Commercetools\Types\ProductType\ProductTypeChangeNameAction;
use Commercetools\Types\ProductType\ProductTypeChangePlainEnumValueLabelAction;
use Commercetools\Types\ProductType\ProductTypeChangePlainEnumValueOrderAction;
use Commercetools\Types\ProductType\ProductTypeRemoveAttributeDefinitionAction;
use Commercetools\Types\ProductType\ProductTypeSetInputTipAction;
use Commercetools\Types\ProductType\ProductTypeSetKeyAction;
use Commercetools\Types\ProductType\ProductType;
use Commercetools\Types\ProductType\ProductTypeUpdate;
use Commercetools\Request\ByProjectKeyProductTypesByIDPost;


class ProductTypeUpdateBuilder extends BaseBuilder {
    /**
     * @var ProductType
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
     * @param ProductTypeAddAttributeDefinitionAction|callable $action builder function <code>
     *   function(ProductTypeAddAttributeDefinitionAction $action): ProductTypeAddAttributeDefinitionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addAttributeDefinition($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeAddAttributeDefinitionAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeAddLocalizedEnumValueAction|callable $action builder function <code>
     *   function(ProductTypeAddLocalizedEnumValueAction $action): ProductTypeAddLocalizedEnumValueAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLocalizedEnumValue($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeAddLocalizedEnumValueAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeAddPlainEnumValueAction|callable $action builder function <code>
     *   function(ProductTypeAddPlainEnumValueAction $action): ProductTypeAddPlainEnumValueAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addPlainEnumValue($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeAddPlainEnumValueAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeChangeAttributeConstraintAction|callable $action builder function <code>
     *   function(ProductTypeChangeAttributeConstraintAction $action): ProductTypeChangeAttributeConstraintAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAttributeConstraint($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeChangeAttributeConstraintAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeChangeAttributeOrderAction|callable $action builder function <code>
     *   function(ProductTypeChangeAttributeOrderAction $action): ProductTypeChangeAttributeOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAttributeOrder($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeChangeAttributeOrderAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeChangeDescriptionAction|callable $action builder function <code>
     *   function(ProductTypeChangeDescriptionAction $action): ProductTypeChangeDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeDescription($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeChangeDescriptionAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeChangeInputHintAction|callable $action builder function <code>
     *   function(ProductTypeChangeInputHintAction $action): ProductTypeChangeInputHintAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeInputHint($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeChangeInputHintAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeChangeIsSearchableAction|callable $action builder function <code>
     *   function(ProductTypeChangeIsSearchableAction $action): ProductTypeChangeIsSearchableAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeIsSearchable($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeChangeIsSearchableAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeChangeLabelAction|callable $action builder function <code>
     *   function(ProductTypeChangeLabelAction $action): ProductTypeChangeLabelAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLabel($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeChangeLabelAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeChangeLocalizedEnumValueLabelAction|callable $action builder function <code>
     *   function(ProductTypeChangeLocalizedEnumValueLabelAction $action): ProductTypeChangeLocalizedEnumValueLabelAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLocalizedEnumValueLabel($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeChangeLocalizedEnumValueLabelAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeChangeLocalizedEnumValueOrderAction|callable $action builder function <code>
     *   function(ProductTypeChangeLocalizedEnumValueOrderAction $action): ProductTypeChangeLocalizedEnumValueOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLocalizedEnumValueOrder($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeChangeLocalizedEnumValueOrderAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeChangeNameAction|callable $action builder function <code>
     *   function(ProductTypeChangeNameAction $action): ProductTypeChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeChangeNameAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeChangePlainEnumValueLabelAction|callable $action builder function <code>
     *   function(ProductTypeChangePlainEnumValueLabelAction $action): ProductTypeChangePlainEnumValueLabelAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changePlainEnumValueLabel($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeChangePlainEnumValueLabelAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeChangePlainEnumValueOrderAction|callable $action builder function <code>
     *   function(ProductTypeChangePlainEnumValueOrderAction $action): ProductTypeChangePlainEnumValueOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changePlainEnumValueOrder($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeChangePlainEnumValueOrderAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeRemoveAttributeDefinitionAction|callable $action builder function <code>
     *   function(ProductTypeRemoveAttributeDefinitionAction $action): ProductTypeRemoveAttributeDefinitionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeAttributeDefinition($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeRemoveAttributeDefinitionAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeSetInputTipAction|callable $action builder function <code>
     *   function(ProductTypeSetInputTipAction $action): ProductTypeSetInputTipAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setInputTip($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeSetInputTipAction::class, $action));
        return $this;
    }
    /**
     * @param ProductTypeSetKeyAction|callable $action builder function <code>
     *   function(ProductTypeSetKeyAction $action): ProductTypeSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey($action = null)
    {
        $this->tryAddAction($this->resolveAction(ProductTypeSetKeyAction::class, $action));
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

    private function resolveAction($class, $action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData($class, null);
            $action = $this->callback($emptyAction, $callback);
        }

        return $action;
    }

    private function tryAddAction(ProductTypeUpdateAction $action = null)
    {
        if (!is_null($action)) {
            $this->addAction($action);
        }
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

    public function getResource(): ?ProductType
    {
        return $this->resource;
    }

    /**
     * Build ProductTypeUpdate
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

    public function buildRequest(): ?ByProjectKeyProductTypesByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
