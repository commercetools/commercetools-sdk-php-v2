<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class DeliveryCloudEventsFormatModel extends JsonObjectModel implements DeliveryCloudEventsFormat
{
    public const DISCRIMINATOR_VALUE = 'CloudEvents';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $cloudEventsVersion;


    public function __construct(
        string $cloudEventsVersion = null
    ) {
        $this->cloudEventsVersion = $cloudEventsVersion;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DeliveryFormat::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getCloudEventsVersion()
    {
        if (is_null($this->cloudEventsVersion)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DeliveryCloudEventsFormat::FIELD_CLOUD_EVENTS_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->cloudEventsVersion = (string) $data;
        }

        return $this->cloudEventsVersion;
    }

    public function setCloudEventsVersion(?string $cloudEventsVersion): void
    {
        $this->cloudEventsVersion = $cloudEventsVersion;
    }



}
