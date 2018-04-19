<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface SubscriptionUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'setChanges' => Types\Subscription\SubscriptionSetChangesAction::class,
        'setKey' => Types\Subscription\SubscriptionSetKeyAction::class,
        'setMessages' => Types\Subscription\SubscriptionSetMessagesAction::class,

    ];

}
