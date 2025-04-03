<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SubscriptionNotification>
 */
final class SubscriptionNotificationBuilder implements Builder
{
    public function build(): SubscriptionNotification
    {
        return new SubscriptionNotificationModel(
        );
    }

    public static function of(): SubscriptionNotificationBuilder
    {
        return new self();
    }
}
