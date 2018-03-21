<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\Subscription\SubscriptionUpdateAction;

use Commercetools\Types\Subscription\SubscriptionSetChangesAction;
use Commercetools\Types\Subscription\SubscriptionSetMessagesAction;
use Commercetools\Types\Subscription\SubscriptionSetKeyAction;
use Commercetools\Types\Subscription\Subscription;
use Commercetools\Types\Subscription\SubscriptionUpdate;


class SubscriptionUpdateBuilder extends BaseBuilder {
    /**
     * @var Subscription
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (SubscriptionSetChangesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setChanges(callable $callback = null)
    {
        $action = $this->mapData(SubscriptionSetChangesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (SubscriptionSetMessagesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMessages(callable $callback = null)
    {
        $action = $this->mapData(SubscriptionSetMessagesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (SubscriptionSetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey(callable $callback = null)
    {
        $action = $this->mapData(SubscriptionSetKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param SubscriptionUpdateAction $action
     * @return $this;
     */
    public function addAction(SubscriptionUpdateAction $action)
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
     * @param Subscription $subscription
     * @return $this
     */
    public function with(Subscription $subscription)
    {
        $this->resource = $subscription;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    /**
     * Build SubscriptionUpdate and delete internal state
     * @return SubscriptionUpdate
     */
    public function build(): SubscriptionUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(SubscriptionUpdate::class, $data);
        if ($update instanceof SubscriptionUpdate &&
            $this->resource instanceof Subscription
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }
}
