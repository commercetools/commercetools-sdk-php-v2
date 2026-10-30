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
final class RecurringOrderNowRequestedMessagePayloadModel extends JsonObjectModel implements RecurringOrderNowRequestedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'RecurringOrderNowRequested';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $requestedAt;

    /**
     *
     * @var ?string
     */
    protected $reason;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $requestedAt = null,
        ?string $reason = null,
        ?string $type = null
    ) {
        $this->requestedAt = $requestedAt;
        $this->reason = $reason;
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
     * <p>Date and time (UTC) the early Order was requested.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getRequestedAt()
    {
        if (is_null($this->requestedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REQUESTED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->requestedAt = $data;
        }

        return $this->requestedAt;
    }

    /**
     * <p>Note provided in the <a href="ctp:api:type:RecurringOrderRequestOrderNowAction">Request Order Now</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getReason()
    {
        if (is_null($this->reason)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REASON);
            if (is_null($data)) {
                return null;
            }
            $this->reason = (string) $data;
        }

        return $this->reason;
    }


    /**
     * @param ?DateTimeImmutable $requestedAt
     */
    public function setRequestedAt(?DateTimeImmutable $requestedAt): void
    {
        $this->requestedAt = $requestedAt;
    }

    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[RecurringOrderNowRequestedMessagePayload::FIELD_REQUESTED_AT]) && $data[RecurringOrderNowRequestedMessagePayload::FIELD_REQUESTED_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderNowRequestedMessagePayload::FIELD_REQUESTED_AT] = $data[RecurringOrderNowRequestedMessagePayload::FIELD_REQUESTED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
