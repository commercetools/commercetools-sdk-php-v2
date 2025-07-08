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
final class RecurringOrderStartsAtSetMessagePayloadModel extends JsonObjectModel implements RecurringOrderStartsAtSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'RecurringOrderStartsAtSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $startsAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $oldStartsAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $startsAt = null,
        ?DateTimeImmutable $oldStartsAt = null,
        ?string $type = null
    ) {
        $this->startsAt = $startsAt;
        $this->oldStartsAt = $oldStartsAt;
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
     * <p>Start date and time of the Recurring Order after the <a href="ctp:api:type:RecurringOrderSetStartsAtAction">Set Starts At</a> update action.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getStartsAt()
    {
        if (is_null($this->startsAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STARTS_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->startsAt = $data;
        }

        return $this->startsAt;
    }

    /**
     * <p>Start date and time of the Recurring Order before the <a href="ctp:api:type:RecurringOrderSetStartsAtAction">Set Starts At</a> update action.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getOldStartsAt()
    {
        if (is_null($this->oldStartsAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_STARTS_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->oldStartsAt = $data;
        }

        return $this->oldStartsAt;
    }


    /**
     * @param ?DateTimeImmutable $startsAt
     */
    public function setStartsAt(?DateTimeImmutable $startsAt): void
    {
        $this->startsAt = $startsAt;
    }

    /**
     * @param ?DateTimeImmutable $oldStartsAt
     */
    public function setOldStartsAt(?DateTimeImmutable $oldStartsAt): void
    {
        $this->oldStartsAt = $oldStartsAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[RecurringOrderStartsAtSetMessagePayload::FIELD_STARTS_AT]) && $data[RecurringOrderStartsAtSetMessagePayload::FIELD_STARTS_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderStartsAtSetMessagePayload::FIELD_STARTS_AT] = $data[RecurringOrderStartsAtSetMessagePayload::FIELD_STARTS_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[RecurringOrderStartsAtSetMessagePayload::FIELD_OLD_STARTS_AT]) && $data[RecurringOrderStartsAtSetMessagePayload::FIELD_OLD_STARTS_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderStartsAtSetMessagePayload::FIELD_OLD_STARTS_AT] = $data[RecurringOrderStartsAtSetMessagePayload::FIELD_OLD_STARTS_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
