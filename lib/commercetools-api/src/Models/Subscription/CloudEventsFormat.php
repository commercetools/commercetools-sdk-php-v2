<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CloudEventsFormat extends DeliveryFormat
{
    public const FIELD_CLOUD_EVENTS_VERSION = 'cloudEventsVersion';

    /**
     * <p>Supported versions: &quot;1.0&quot;.</p>
     *

     * @return null|string
     */
    public function getCloudEventsVersion();

    /**
     * @param ?string $cloudEventsVersion
     */
    public function setCloudEventsVersion(?string $cloudEventsVersion): void;
}
