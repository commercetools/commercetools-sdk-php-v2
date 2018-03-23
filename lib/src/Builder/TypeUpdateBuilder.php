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
     *   function (TypeAddEnumValueAction $action): TypeAddEnumValueAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addEnumValue($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(TypeAddEnumValueAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeAddEnumValueAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeAddFieldDefinitionAction|callable $action builder function <code>
     *   function (TypeAddFieldDefinitionAction $action): TypeAddFieldDefinitionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addFieldDefinition($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(TypeAddFieldDefinitionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeAddFieldDefinitionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeAddLocalizedEnumValueAction|callable $action builder function <code>
     *   function (TypeAddLocalizedEnumValueAction $action): TypeAddLocalizedEnumValueAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLocalizedEnumValue($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(TypeAddLocalizedEnumValueAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeAddLocalizedEnumValueAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeEnumValueOrderAction|callable $action builder function <code>
     *   function (TypeChangeEnumValueOrderAction $action): TypeChangeEnumValueOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeEnumValueOrder($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(TypeChangeEnumValueOrderAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeChangeEnumValueOrderAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeFieldDefinitionLabelAction|callable $action builder function <code>
     *   function (TypeChangeFieldDefinitionLabelAction $action): TypeChangeFieldDefinitionLabelAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeFieldDefinitionLabel($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(TypeChangeFieldDefinitionLabelAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeChangeFieldDefinitionLabelAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeFieldDefinitionOrderAction|callable $action builder function <code>
     *   function (TypeChangeFieldDefinitionOrderAction $action): TypeChangeFieldDefinitionOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeFieldDefinitionOrder($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(TypeChangeFieldDefinitionOrderAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeChangeFieldDefinitionOrderAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeKeyAction|callable $action builder function <code>
     *   function (TypeChangeKeyAction $action): TypeChangeKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeKey($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(TypeChangeKeyAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeChangeKeyAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeLabelAction|callable $action builder function <code>
     *   function (TypeChangeLabelAction $action): TypeChangeLabelAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLabel($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(TypeChangeLabelAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeChangeLabelAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeLocalizedEnumValueOrderAction|callable $action builder function <code>
     *   function (TypeChangeLocalizedEnumValueOrderAction $action): TypeChangeLocalizedEnumValueOrderAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLocalizedEnumValueOrder($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(TypeChangeLocalizedEnumValueOrderAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeChangeLocalizedEnumValueOrderAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeChangeNameAction|callable $action builder function <code>
     *   function (TypeChangeNameAction $action): TypeChangeNameAction {
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
            $emptyAction = $this->mapData(TypeChangeNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeChangeNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeRemoveFieldDefinitionAction|callable $action builder function <code>
     *   function (TypeRemoveFieldDefinitionAction $action): TypeRemoveFieldDefinitionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeFieldDefinition($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(TypeRemoveFieldDefinitionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeRemoveFieldDefinitionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param TypeSetDescriptionAction|callable $action builder function <code>
     *   function (TypeSetDescriptionAction $action): TypeSetDescriptionAction {
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
            $emptyAction = $this->mapData(TypeSetDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof TypeSetDescriptionAction) {
            throw new \InvalidArgumentException();
        }
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
