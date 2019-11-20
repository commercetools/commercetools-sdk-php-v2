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
     * @var ?MessageSubscriptionCollection
     */
    private $messages;

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
    public function withMessages(?MessageSubscriptionCollection $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    public function build(): SubscriptionSetMessagesAction
    {
        return new SubscriptionSetMessagesActionModel(
            $this->messages
        );
    }

    public static function of(): SubscriptionSetMessagesActionBuilder
    {
        return new self();
    }
}
