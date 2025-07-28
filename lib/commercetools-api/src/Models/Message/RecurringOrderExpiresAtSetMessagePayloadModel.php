<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderExpiresAtSetMessagePayloadModel extends JsonObjectModel implements RecurringOrderExpiresAtSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'RecurringOrderExpiresAtSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $newExpiresAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $oldExpiresAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $newExpiresAt = null,
        ?DateTimeImmutable $oldExpiresAt = null,
        ?string $type = null
    ) {
        $this->newExpiresAt = $newExpiresAt;
        $this->oldExpiresAt = $oldExpiresAt;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>Expiration date and time of the Recurring Order after the <a href="ctp:api:type:RecurringOrderSetExpiresAtAction">Set Expires At</a> update action.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getNewExpiresAt()
    {
        if (is_null($this->newExpiresAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NEW_EXPIRES_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->newExpiresAt = $data;
        }

        return $this->newExpiresAt;
    }

    /**
     * <p>Expiration date and time of the Recurring Order before the <a href="ctp:api:type:RecurringOrderSetExpiresAtAction">Set Expires At</a> update action.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getOldExpiresAt()
    {
        if (is_null($this->oldExpiresAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_EXPIRES_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->oldExpiresAt = $data;
        }

        return $this->oldExpiresAt;
    }


    /**
     * @param ?DateTimeImmutable $newExpiresAt
     */
    public function setNewExpiresAt(?DateTimeImmutable $newExpiresAt): void
    {
        $this->newExpiresAt = $newExpiresAt;
    }

    /**
     * @param ?DateTimeImmutable $oldExpiresAt
     */
    public function setOldExpiresAt(?DateTimeImmutable $oldExpiresAt): void
    {
        $this->oldExpiresAt = $oldExpiresAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[RecurringOrderExpiresAtSetMessagePayload::FIELD_NEW_EXPIRES_AT]) && $data[RecurringOrderExpiresAtSetMessagePayload::FIELD_NEW_EXPIRES_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderExpiresAtSetMessagePayload::FIELD_NEW_EXPIRES_AT] = $data[RecurringOrderExpiresAtSetMessagePayload::FIELD_NEW_EXPIRES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[RecurringOrderExpiresAtSetMessagePayload::FIELD_OLD_EXPIRES_AT]) && $data[RecurringOrderExpiresAtSetMessagePayload::FIELD_OLD_EXPIRES_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderExpiresAtSetMessagePayload::FIELD_OLD_EXPIRES_AT] = $data[RecurringOrderExpiresAtSetMessagePayload::FIELD_OLD_EXPIRES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
