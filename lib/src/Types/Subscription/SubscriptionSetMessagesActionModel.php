<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Subscription\SubscriptionUpdateActionModel;

class SubscriptionSetMessagesActionModel extends SubscriptionUpdateActionModel implements SubscriptionSetMessagesAction
{
    const DISCRIMINATOR_VALUE = 'setMessages';

    /**
     * @var MessageSubscriptionCollection
     */
    protected $messages;

    /**
     * @return MessageSubscriptionCollection
     */
    public function getMessages()
    {
        if (is_null($this->messages)) {
            $value = $this->raw(SubscriptionSetMessagesAction::FIELD_MESSAGES);
            if (is_null($value)) {
                return $this->mapData(MessageSubscriptionCollection::class, null);
            }
            $value = $this->mapData(MessageSubscriptionCollection::class, $value);
            $this->messages = $value;
        }
        return $this->messages;
    }

    /**
     * @param MessageSubscriptionCollection $messages
     * @return $this
     */
    public function setMessages(MessageSubscriptionCollection $messages)
    {
        $this->messages = $messages;

        return $this;
    }

}
