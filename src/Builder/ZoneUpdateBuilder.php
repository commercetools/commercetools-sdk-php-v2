<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Zone\ZoneUpdateAction;

use Commercetools\Types\Zone\ZoneAddLocationAction;
use Commercetools\Types\Zone\ZoneChangeNameAction;
use Commercetools\Types\Zone\ZoneRemoveLocationAction;
use Commercetools\Types\Zone\ZoneSetDescriptionAction;
use Commercetools\Types\Zone\Zone;
use Commercetools\Types\Zone\ZoneUpdate;
use Commercetools\Request\ByProjectKeyZonesByIDPost;


class ZoneUpdateBuilder extends BaseBuilder {
    /**
     * @var Zone
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
     *   function (ZoneAddLocationAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLocation(callable $callback = null)
    {
        $action = $this->mapData(ZoneAddLocationAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ZoneChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(ZoneChangeNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ZoneRemoveLocationAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeLocation(callable $callback = null)
    {
        $action = $this->mapData(ZoneRemoveLocationAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ZoneSetDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription(callable $callback = null)
    {
        $action = $this->mapData(ZoneSetDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param ZoneUpdateAction $action
     * @return $this;
     */
    public function addAction(ZoneUpdateAction $action)
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
     * @param Zone $zone
     * @return $this
     */
    public function with(Zone $zone)
    {
        $this->resource = $zone;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?Zone
    {
        return $this->resource;
    }

    /**
     * Build ZoneUpdate
     * @return ZoneUpdate
     */
    public function build(): ZoneUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ZoneUpdate::class, $data);
        if ($update instanceof ZoneUpdate &&
            $this->resource instanceof Zone
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyZonesByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
