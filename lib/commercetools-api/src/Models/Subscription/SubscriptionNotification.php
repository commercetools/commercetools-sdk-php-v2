<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SubscriptionNotification extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'notificationType';
    public const FIELD_NOTIFICATION_TYPE = 'notificationType';

    /**
     * <p>Identifies the payload.</p>
     *

     * @return null|string
     */
    public function getNotificationType();
}
