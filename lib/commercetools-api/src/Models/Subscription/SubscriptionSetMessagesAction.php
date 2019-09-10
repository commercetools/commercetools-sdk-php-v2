<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;

interface SubscriptionSetMessagesAction extends SubscriptionUpdateAction
{
    
    const FIELD_MESSAGES = 'messages';

    /**
     *
     * @return MessageSubscriptionCollection|null
     */
    public function getMessages();
    public function setMessages(?MessageSubscriptionCollection $messages): void;
}