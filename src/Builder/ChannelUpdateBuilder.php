<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\Channel\ChannelUpdateAction;

use Commercetools\Types\Channel\ChannelSetRolesAction;
use Commercetools\Types\Channel\ChannelChangeDescriptionAction;
use Commercetools\Types\Channel\ChannelRemoveRolesAction;
use Commercetools\Types\Channel\ChannelSetCustomFieldAction;
use Commercetools\Types\Channel\ChannelSetCustomTypeAction;
use Commercetools\Types\Channel\ChannelAddRolesAction;
use Commercetools\Types\Channel\ChannelSetAddressAction;
use Commercetools\Types\Channel\ChannelSetGeolocationAction;
use Commercetools\Types\Channel\ChannelChangeNameAction;
use Commercetools\Types\Channel\ChannelChangeKeyAction;
use Commercetools\Types\Channel\Channel;
use Commercetools\Types\Channel\ChannelUpdate;


class ChannelUpdateBuilder extends BaseBuilder {
    /**
     * @var Channel
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (ChannelSetRolesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setRoles(callable $callback = null)
    {
        $action = $this->mapData(ChannelSetRolesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ChannelChangeDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeDescription(callable $callback = null)
    {
        $action = $this->mapData(ChannelChangeDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ChannelRemoveRolesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeRoles(callable $callback = null)
    {
        $action = $this->mapData(ChannelRemoveRolesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ChannelSetCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField(callable $callback = null)
    {
        $action = $this->mapData(ChannelSetCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ChannelSetCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType(callable $callback = null)
    {
        $action = $this->mapData(ChannelSetCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ChannelAddRolesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addRoles(callable $callback = null)
    {
        $action = $this->mapData(ChannelAddRolesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ChannelSetAddressAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAddress(callable $callback = null)
    {
        $action = $this->mapData(ChannelSetAddressAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ChannelSetGeolocationAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setGeoLocation(callable $callback = null)
    {
        $action = $this->mapData(ChannelSetGeolocationAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ChannelChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(ChannelChangeNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ChannelChangeKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeKey(callable $callback = null)
    {
        $action = $this->mapData(ChannelChangeKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param ChannelUpdateAction $action
     * @return $this;
     */
    public function addAction(ChannelUpdateAction $action)
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
     * @param Channel $channel
     * @return $this
     */
    public function with(Channel $channel)
    {
        $this->resource = $channel;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    /**
     * Build ChannelUpdate and delete internal state
     * @return ChannelUpdate
     */
    public function build(): ChannelUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ChannelUpdate::class, $data);
        if ($update instanceof ChannelUpdate &&
            $this->resource instanceof Channel
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }
}
