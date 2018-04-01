<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
use Commercetools\Types\Extension\ExtensionUpdateAction;

use Commercetools\Types\Extension\ExtensionChangeDestinationAction;
use Commercetools\Types\Extension\ExtensionChangeTriggersAction;
use Commercetools\Types\Extension\ExtensionSetKeyAction;
use Commercetools\Types\Extension\Extension;
use Commercetools\Types\Extension\ExtensionUpdate;
use Commercetools\Request\ByProjectKeyExtensionsByIDPost;


class ExtensionUpdateBuilder extends BaseBuilder {
    /**
     * @var Extension
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
     * @param ExtensionChangeDestinationAction|callable $action builder function <code>
     *   function(ExtensionChangeDestinationAction $action): ExtensionChangeDestinationAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeDestination($action = null)
    {
        $this->addAction($this->resolveAction(ExtensionChangeDestinationAction::class, $action));
        return $this;
    }
    /**
     * @param ExtensionChangeTriggersAction|callable $action builder function <code>
     *   function(ExtensionChangeTriggersAction $action): ExtensionChangeTriggersAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTriggers($action = null)
    {
        $this->addAction($this->resolveAction(ExtensionChangeTriggersAction::class, $action));
        return $this;
    }
    /**
     * @param ExtensionSetKeyAction|callable $action builder function <code>
     *   function(ExtensionSetKeyAction $action): ExtensionSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey($action = null)
    {
        $this->addAction($this->resolveAction(ExtensionSetKeyAction::class, $action));
        return $this;
    }

    /**
     * @param ExtensionUpdateAction $action
     * @return $this;
     */
    public function addAction(ExtensionUpdateAction $action)
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
        if ($action instanceof $class) {
            return $action;
        }

        throw new BuilderInvalidArgumentException(
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
     * @param Extension $extension
     * @return $this
     */
    public function with(Extension $extension)
    {
        $this->resource = $extension;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?Extension
    {
        return $this->resource;
    }

    /**
     * Build ExtensionUpdate
     * @return ExtensionUpdate
     */
    public function build(): ExtensionUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ExtensionUpdate::class, $data);
        if ($update instanceof ExtensionUpdate &&
            $this->resource instanceof Extension
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyExtensionsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
