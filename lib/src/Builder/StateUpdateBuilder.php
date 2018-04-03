<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\State\StateUpdateAction;

use Commercetools\Types\State\StateAddRolesAction;
use Commercetools\Types\State\StateChangeInitialAction;
use Commercetools\Types\State\StateChangeKeyAction;
use Commercetools\Types\State\StateChangeTypeAction;
use Commercetools\Types\State\StateRemoveRolesAction;
use Commercetools\Types\State\StateSetDescriptionAction;
use Commercetools\Types\State\StateSetNameAction;
use Commercetools\Types\State\StateSetRolesAction;
use Commercetools\Types\State\StateSetTransitionsAction;
use Commercetools\Types\State\State;
use Commercetools\Types\State\StateUpdate;
use Commercetools\Request\ByProjectKeyStatesByIDPost;


class StateUpdateBuilder extends BaseBuilder {
    /**
     * @var State
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
     * @param StateAddRolesAction|callable $action builder function <code>
     *   function(StateAddRolesAction $action): StateAddRolesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function addRoles($action = null)
    {
        $this->addAction($this->resolveAction(StateAddRolesAction::class, $action));
        return $this;
    }
    /**
     * @param StateChangeInitialAction|callable $action builder function <code>
     *   function(StateChangeInitialAction $action): StateChangeInitialAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeInitial($action = null)
    {
        $this->addAction($this->resolveAction(StateChangeInitialAction::class, $action));
        return $this;
    }
    /**
     * @param StateChangeKeyAction|callable $action builder function <code>
     *   function(StateChangeKeyAction $action): StateChangeKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeKey($action = null)
    {
        $this->addAction($this->resolveAction(StateChangeKeyAction::class, $action));
        return $this;
    }
    /**
     * @param StateChangeTypeAction|callable $action builder function <code>
     *   function(StateChangeTypeAction $action): StateChangeTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeType($action = null)
    {
        $this->addAction($this->resolveAction(StateChangeTypeAction::class, $action));
        return $this;
    }
    /**
     * @param StateRemoveRolesAction|callable $action builder function <code>
     *   function(StateRemoveRolesAction $action): StateRemoveRolesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function removeRoles($action = null)
    {
        $this->addAction($this->resolveAction(StateRemoveRolesAction::class, $action));
        return $this;
    }
    /**
     * @param StateSetDescriptionAction|callable $action builder function <code>
     *   function(StateSetDescriptionAction $action): StateSetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setDescription($action = null)
    {
        $this->addAction($this->resolveAction(StateSetDescriptionAction::class, $action));
        return $this;
    }
    /**
     * @param StateSetNameAction|callable $action builder function <code>
     *   function(StateSetNameAction $action): StateSetNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setName($action = null)
    {
        $this->addAction($this->resolveAction(StateSetNameAction::class, $action));
        return $this;
    }
    /**
     * @param StateSetRolesAction|callable $action builder function <code>
     *   function(StateSetRolesAction $action): StateSetRolesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setRoles($action = null)
    {
        $this->addAction($this->resolveAction(StateSetRolesAction::class, $action));
        return $this;
    }
    /**
     * @param StateSetTransitionsAction|callable $action builder function <code>
     *   function(StateSetTransitionsAction $action): StateSetTransitionsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setTransitions($action = null)
    {
        $this->addAction($this->resolveAction(StateSetTransitionsAction::class, $action));
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

    /**
     * @param $class
     * @param $action
     * @return StateUpdateAction
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

    public function getResource(): ?State
    {
        return $this->resource;
    }

    /**
     * Build StateUpdate
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

    public function buildRequest(): ?ByProjectKeyStatesByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
