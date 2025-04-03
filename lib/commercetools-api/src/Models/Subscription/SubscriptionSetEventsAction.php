<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SubscriptionSetEventsAction extends SubscriptionUpdateAction
{
    public const FIELD_MESSAGES = 'messages';

    /**
     * <p>Value to set. Can only be unset if either <code>messages</code> or <code>changes</code> is set.</p>
     *

     * @return null|EventSubscriptionCollection
     */
    public function getMessages();

    /**
     * @param ?EventSubscriptionCollection $messages
     */
    public function setMessages(?EventSubscriptionCollection $messages): void;
}
