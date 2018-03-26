<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Type\TypeUpdateAction;

use Commercetools\Types\Type\TypeAddEnumValueAction;
use Commercetools\Types\Type\TypeAddFieldDefinitionAction;
use Commercetools\Types\Type\TypeAddLocalizedEnumValueAction;
use Commercetools\Types\Type\TypeChangeEnumValueOrderAction;
use Commercetools\Types\Type\TypeChangeFieldDefinitionLabelAction;
use Commercetools\Types\Type\TypeChangeFieldDefinitionOrderAction;
use Commercetools\Types\Type\TypeChangeKeyAction;
use Commercetools\Types\Type\TypeChangeLabelAction;
use Commercetools\Types\Type\TypeChangeLocalizedEnumValueOrderAction;
use Commercetools\Types\Type\TypeChangeNameAction;
use Commercetools\Types\Type\TypeRemoveFieldDefinitionAction;
use Commercetools\Types\Type\TypeSetDescriptionAction;
use Commercetools\Types\Type\Type;
use Commercetools\Types\Type\TypeUpdate;
use Commercetools\Request\ByProjectKeyTypesByIDPost;


class TypeUpdateBuilder extends BaseBuilder {
    /**
     * @var Type
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
     * @param TypeAddEnumValueAction|callable $action builder function <code>
     *   function(TypeAddEnumValueAction $action): TypeAddEnumValueAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addEnumValue($action = null)
    {
        $action = $this->resolveAction(TypeAddEnumValueAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeAddFieldDefinitionAction|callable $action builder function <code>
     *   function(TypeAddFieldDefinitionAction $action): TypeAddFieldDefinitionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addFieldDefinition($action = null)
    {
        $action = $this->resolveAction(TypeAddFieldDefinitionAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeAddLocalizedEnumValueAction|callable $action builder function <code>
     *   function(TypeAddLocalizedEnumValueAction $action): TypeAddLocalizedEnumValueAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLocalizedEnumValue($action = null)
    {
        $action = $this->resolveAction(TypeAddLocalizedEnumValueAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeEnumValueOrderAction|callable $action builder function <code>
     *   function(TypeChangeEnumValueOrderAction $action): TypeChangeEnumValueOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeEnumValueOrder($action = null)
    {
        $action = $this->resolveAction(TypeChangeEnumValueOrderAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeFieldDefinitionLabelAction|callable $action builder function <code>
     *   function(TypeChangeFieldDefinitionLabelAction $action): TypeChangeFieldDefinitionLabelAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeFieldDefinitionLabel($action = null)
    {
        $action = $this->resolveAction(TypeChangeFieldDefinitionLabelAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeFieldDefinitionOrderAction|callable $action builder function <code>
     *   function(TypeChangeFieldDefinitionOrderAction $action): TypeChangeFieldDefinitionOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeFieldDefinitionOrder($action = null)
    {
        $action = $this->resolveAction(TypeChangeFieldDefinitionOrderAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeKeyAction|callable $action builder function <code>
     *   function(TypeChangeKeyAction $action): TypeChangeKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeKey($action = null)
    {
        $action = $this->resolveAction(TypeChangeKeyAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeLabelAction|callable $action builder function <code>
     *   function(TypeChangeLabelAction $action): TypeChangeLabelAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLabel($action = null)
    {
        $action = $this->resolveAction(TypeChangeLabelAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeLocalizedEnumValueOrderAction|callable $action builder function <code>
     *   function(TypeChangeLocalizedEnumValueOrderAction $action): TypeChangeLocalizedEnumValueOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLocalizedEnumValueOrder($action = null)
    {
        $action = $this->resolveAction(TypeChangeLocalizedEnumValueOrderAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeNameAction|callable $action builder function <code>
     *   function(TypeChangeNameAction $action): TypeChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName($action = null)
    {
        $action = $this->resolveAction(TypeChangeNameAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeRemoveFieldDefinitionAction|callable $action builder function <code>
     *   function(TypeRemoveFieldDefinitionAction $action): TypeRemoveFieldDefinitionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeFieldDefinition($action = null)
    {
        $action = $this->resolveAction(TypeRemoveFieldDefinitionAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeSetDescriptionAction|callable $action builder function <code>
     *   function(TypeSetDescriptionAction $action): TypeSetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription($action = null)
    {
        $action = $this->resolveAction(TypeSetDescriptionAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param TypeUpdateAction $action
     * @return $this;
     */
    public function addAction(TypeUpdateAction $action)
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
     * @param Type $type
     * @return $this
     */
    public function with(Type $type)
    {
        $this->resource = $type;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?Type
    {
        return $this->resource;
    }

    /**
     * Build TypeUpdate
     * @return TypeUpdate
     */
    public function build(): TypeUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(TypeUpdate::class, $data);
        if ($update instanceof TypeUpdate &&
            $this->resource instanceof Type
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyTypesByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
