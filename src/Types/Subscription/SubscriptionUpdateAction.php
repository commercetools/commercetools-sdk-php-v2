<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface SubscriptionUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'setKey' => Types\Subscription\SubscriptionSetKeyAction::class,
        'setChanges' => Types\Subscription\SubscriptionSetChangesAction::class,
        'setMessages' => Types\Subscription\SubscriptionSetMessagesAction::class,

    ];

}
