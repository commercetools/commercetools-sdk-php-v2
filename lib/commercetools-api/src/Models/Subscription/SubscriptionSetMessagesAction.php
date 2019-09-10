<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

interface SubscriptionSetMessagesAction extends SubscriptionUpdateAction
{
    const FIELD_MESSAGES = 'messages';

    /**
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages();

    public function setMessages(?MessageSubscriptionCollection $messages): void;
}
