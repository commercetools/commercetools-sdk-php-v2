<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
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
     * @param callable $callback builder function <code>
     *   function (ExtensionChangeDestinationAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeDestination(callable $callback = null)
    {
        $action = $this->mapData(ExtensionChangeDestinationAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ExtensionChangeTriggersAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTriggers(callable $callback = null)
    {
        $action = $this->mapData(ExtensionChangeTriggersAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ExtensionSetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey(callable $callback = null)
    {
        $action = $this->mapData(ExtensionSetKeyAction::class, null);
        $this->callback($action, $callback);
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
