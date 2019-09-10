<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

/**
 * @implements Builder<SubscriptionSetMessagesAction>
 */
final class SubscriptionSetMessagesActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?MessageSubscriptionCollection
     */
    private $messages;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessages(?MessageSubscriptionCollection $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    public function build(): SubscriptionSetMessagesAction
    {
        return new SubscriptionSetMessagesActionModel(
            $this->action,
            $this->messages
        );
    }

    public static function of(): SubscriptionSetMessagesActionBuilder
    {
        return new self();
    }
}
