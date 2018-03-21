<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\Type\TypeUpdateAction;

use Commercetools\Types\Type\TypeAddFieldDefinitionAction;
use Commercetools\Types\Type\TypeRemoveFieldDefinitionAction;
use Commercetools\Types\Type\TypeChangeLocalizedEnumValueOrderAction;
use Commercetools\Types\Type\TypeChangeFieldDefinitionOrderAction;
use Commercetools\Types\Type\TypeAddEnumValueAction;
use Commercetools\Types\Type\TypeChangeNameAction;
use Commercetools\Types\Type\TypeChangeEnumValueOrderAction;
use Commercetools\Types\Type\TypeChangeKeyAction;
use Commercetools\Types\Type\TypeSetDescriptionAction;
use Commercetools\Types\Type\TypeChangeLabelAction;
use Commercetools\Types\Type\TypeChangeFieldDefinitionLabelAction;
use Commercetools\Types\Type\TypeAddLocalizedEnumValueAction;
use Commercetools\Types\Type\Type;
use Commercetools\Types\Type\TypeUpdate;


class TypeUpdateBuilder extends BaseBuilder {
    /**
     * @var Type
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (TypeAddFieldDefinitionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addFieldDefinition(callable $callback = null)
    {
        $action = $this->mapData(TypeAddFieldDefinitionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TypeRemoveFieldDefinitionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeFieldDefinition(callable $callback = null)
    {
        $action = $this->mapData(TypeRemoveFieldDefinitionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TypeChangeLocalizedEnumValueOrderAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLocalizedEnumValueOrder(callable $callback = null)
    {
        $action = $this->mapData(TypeChangeLocalizedEnumValueOrderAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TypeChangeFieldDefinitionOrderAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeFieldDefinitionOrder(callable $callback = null)
    {
        $action = $this->mapData(TypeChangeFieldDefinitionOrderAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TypeAddEnumValueAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addEnumValue(callable $callback = null)
    {
        $action = $this->mapData(TypeAddEnumValueAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TypeChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(TypeChangeNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TypeChangeEnumValueOrderAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeEnumValueOrder(callable $callback = null)
    {
        $action = $this->mapData(TypeChangeEnumValueOrderAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TypeChangeKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeKey(callable $callback = null)
    {
        $action = $this->mapData(TypeChangeKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TypeSetDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription(callable $callback = null)
    {
        $action = $this->mapData(TypeSetDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TypeChangeLabelAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLabel(callable $callback = null)
    {
        $action = $this->mapData(TypeChangeLabelAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TypeChangeFieldDefinitionLabelAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeFieldDefinitionLabel(callable $callback = null)
    {
        $action = $this->mapData(TypeChangeFieldDefinitionLabelAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (TypeAddLocalizedEnumValueAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLocalizedEnumValue(callable $callback = null)
    {
        $action = $this->mapData(TypeAddLocalizedEnumValueAction::class, null);
        $this->callback($action, $callback);
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
        $this->actions[] = $action;
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

    /**
     * Build TypeUpdate and delete internal state
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
}
