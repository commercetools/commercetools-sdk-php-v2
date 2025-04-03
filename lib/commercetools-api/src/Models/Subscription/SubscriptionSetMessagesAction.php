<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SubscriptionSetMessagesAction extends SubscriptionUpdateAction
{
    public const FIELD_MESSAGES = 'messages';

    /**
     * <p>Value to set. Can only be unset if either <code>changes</code> or <code>events</code> is set.</p>
     *

     * @return null|MessageSubscriptionCollection
     */
    public function getMessages();

    /**
     * @param ?MessageSubscriptionCollection $messages
     */
    public function setMessages(?MessageSubscriptionCollection $messages): void;
}
