<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Subscription\SubscriptionUpdateAction;

use Commercetools\Types\Subscription\SubscriptionSetChangesAction;
use Commercetools\Types\Subscription\SubscriptionSetKeyAction;
use Commercetools\Types\Subscription\SubscriptionSetMessagesAction;
use Commercetools\Types\Subscription\Subscription;
use Commercetools\Types\Subscription\SubscriptionUpdate;
use Commercetools\Request\ByProjectKeySubscriptionsByIDPost;


class SubscriptionUpdateBuilder extends BaseBuilder
{
    /**
     * @var Subscription
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
     * @param SubscriptionSetChangesAction|callable $action builder function <code>
     *   function(SubscriptionSetChangesAction $action): SubscriptionSetChangesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setChanges($action = null)
    {
        $this->addAction($this->resolveAction(SubscriptionSetChangesAction::class, $action));
        return $this;
    }
    /**
     * @param SubscriptionSetKeyAction|callable $action builder function <code>
     *   function(SubscriptionSetKeyAction $action): SubscriptionSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setKey($action = null)
    {
        $this->addAction($this->resolveAction(SubscriptionSetKeyAction::class, $action));
        return $this;
    }
    /**
     * @param SubscriptionSetMessagesAction|callable $action builder function <code>
     *   function(SubscriptionSetMessagesAction $action): SubscriptionSetMessagesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setMessages($action = null)
    {
        $this->addAction($this->resolveAction(SubscriptionSetMessagesAction::class, $action));
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

    /**
     * @param $class
     * @param $action
     * @return SubscriptionUpdateAction
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

    public function getResource(): ?Subscription
    {
        return $this->resource;
    }

    /**
     * Build SubscriptionUpdate
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

    public function buildRequest(): ?ByProjectKeySubscriptionsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
