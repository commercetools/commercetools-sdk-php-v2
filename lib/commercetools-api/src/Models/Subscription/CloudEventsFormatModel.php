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

/**
 * @internal
 */
final class CloudEventsFormatModel extends JsonObjectModel implements CloudEventsFormat
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


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $cloudEventsVersion = null
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
            $data = $this->raw(self::FIELD_TYPE);
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
            $data = $this->raw(self::FIELD_CLOUD_EVENTS_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->cloudEventsVersion = (string) $data;
        }

        return $this->cloudEventsVersion;
    }


    /**
     * @param ?string $cloudEventsVersion
     */
    public function setCloudEventsVersion(?string $cloudEventsVersion): void
    {
        $this->cloudEventsVersion = $cloudEventsVersion;
    }
}
