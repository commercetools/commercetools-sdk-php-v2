<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

interface DeliveryCloudEventsFormat extends DeliveryFormat
{
    const FIELD_CLOUD_EVENTS_VERSION = 'cloudEventsVersion';

    /**
     * @return null|string
     */
    public function getCloudEventsVersion();

    public function setCloudEventsVersion(?string $cloudEventsVersion): void;
}
