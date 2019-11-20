<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

/**
 * @implements Builder<DeliveryCloudEventsFormat>
 */
final class DeliveryCloudEventsFormatBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $cloudEventsVersion;

    /**
     * @return null|string
     */
    public function getCloudEventsVersion()
    {
        return $this->cloudEventsVersion;
    }

    /**
     * @return $this
     */
    public function withCloudEventsVersion(?string $cloudEventsVersion)
    {
        $this->cloudEventsVersion = $cloudEventsVersion;

        return $this;
    }

    public function build(): DeliveryCloudEventsFormat
    {
        return new DeliveryCloudEventsFormatModel(
            $this->cloudEventsVersion
        );
    }

    public static function of(): DeliveryCloudEventsFormatBuilder
    {
        return new self();
    }
}
