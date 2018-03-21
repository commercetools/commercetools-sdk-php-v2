<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\State\StateUpdateAction;

use Commercetools\Types\State\StateChangeInitialAction;
use Commercetools\Types\State\StateSetDescriptionAction;
use Commercetools\Types\State\StateSetNameAction;
use Commercetools\Types\State\StateSetTransitionsAction;
use Commercetools\Types\State\StateAddRolesAction;
use Commercetools\Types\State\StateRemoveRolesAction;
use Commercetools\Types\State\StateChangeKeyAction;
use Commercetools\Types\State\StateChangeTypeAction;
use Commercetools\Types\State\StateSetRolesAction;
use Commercetools\Types\State\State;
use Commercetools\Types\State\StateUpdate;


class StateUpdateBuilder extends BaseBuilder {
    /**
     * @var State
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (StateChangeInitialAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeInitial(callable $callback = null)
    {
        $action = $this->mapData(StateChangeInitialAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (StateSetDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription(callable $callback = null)
    {
        $action = $this->mapData(StateSetDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (StateSetNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setName(callable $callback = null)
    {
        $action = $this->mapData(StateSetNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (StateSetTransitionsAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTransitions(callable $callback = null)
    {
        $action = $this->mapData(StateSetTransitionsAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (StateAddRolesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addRoles(callable $callback = null)
    {
        $action = $this->mapData(StateAddRolesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (StateRemoveRolesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeRoles(callable $callback = null)
    {
        $action = $this->mapData(StateRemoveRolesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (StateChangeKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeKey(callable $callback = null)
    {
        $action = $this->mapData(StateChangeKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (StateChangeTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeType(callable $callback = null)
    {
        $action = $this->mapData(StateChangeTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (StateSetRolesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setRoles(callable $callback = null)
    {
        $action = $this->mapData(StateSetRolesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param StateUpdateAction $action
     * @return $this;
     */
    public function addAction(StateUpdateAction $action)
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
     * @param State $state
     * @return $this
     */
    public function with(State $state)
    {
        $this->resource = $state;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    /**
     * Build StateUpdate and delete internal state
     * @return StateUpdate
     */
    public function build(): StateUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(StateUpdate::class, $data);
        if ($update instanceof StateUpdate &&
            $this->resource instanceof State
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }
}
