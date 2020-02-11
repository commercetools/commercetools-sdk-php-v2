<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface DeliveryCloudEventsFormat extends DeliveryFormat
{

    public const FIELD_CLOUD_EVENTS_VERSION = 'cloudEventsVersion';

    /**
     * @return null|string
     */
    public function getCloudEventsVersion();

    public function setCloudEventsVersion(?string $cloudEventsVersion): void;
}
