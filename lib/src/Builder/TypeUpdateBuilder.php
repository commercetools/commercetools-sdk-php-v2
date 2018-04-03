<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\InvalidArgumentException;
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
     * @throws InvalidArgumentException
     */
    public function addEnumValue($action = null)
    {
        $this->addAction($this->resolveAction(TypeAddEnumValueAction::class, $action));
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
     * @throws InvalidArgumentException
     */
    public function addFieldDefinition($action = null)
    {
        $this->addAction($this->resolveAction(TypeAddFieldDefinitionAction::class, $action));
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
     * @throws InvalidArgumentException
     */
    public function addLocalizedEnumValue($action = null)
    {
        $this->addAction($this->resolveAction(TypeAddLocalizedEnumValueAction::class, $action));
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
     * @throws InvalidArgumentException
     */
    public function changeEnumValueOrder($action = null)
    {
        $this->addAction($this->resolveAction(TypeChangeEnumValueOrderAction::class, $action));
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
     * @throws InvalidArgumentException
     */
    public function changeFieldDefinitionLabel($action = null)
    {
        $this->addAction($this->resolveAction(TypeChangeFieldDefinitionLabelAction::class, $action));
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
     * @throws InvalidArgumentException
     */
    public function changeFieldDefinitionOrder($action = null)
    {
        $this->addAction($this->resolveAction(TypeChangeFieldDefinitionOrderAction::class, $action));
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
     * @throws InvalidArgumentException
     */
    public function changeKey($action = null)
    {
        $this->addAction($this->resolveAction(TypeChangeKeyAction::class, $action));
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
     * @throws InvalidArgumentException
     */
    public function changeLabel($action = null)
    {
        $this->addAction($this->resolveAction(TypeChangeLabelAction::class, $action));
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
     * @throws InvalidArgumentException
     */
    public function changeLocalizedEnumValueOrder($action = null)
    {
        $this->addAction($this->resolveAction(TypeChangeLocalizedEnumValueOrderAction::class, $action));
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
     * @throws InvalidArgumentException
     */
    public function changeName($action = null)
    {
        $this->addAction($this->resolveAction(TypeChangeNameAction::class, $action));
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
     * @throws InvalidArgumentException
     */
    public function removeFieldDefinition($action = null)
    {
        $this->addAction($this->resolveAction(TypeRemoveFieldDefinitionAction::class, $action));
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
     * @throws InvalidArgumentException
     */
    public function setDescription($action = null)
    {
        $this->addAction($this->resolveAction(TypeSetDescriptionAction::class, $action));
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

    /**
     * @param $class
     * @param $action
     * @return TypeUpdateAction
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
