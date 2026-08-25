<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class EstimatedDeliveryModel extends JsonObjectModel implements EstimatedDelivery
{
    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $from;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $until;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $from = null,
        ?DateTimeImmutable $until = null
    ) {
        $this->from = $from;
        $this->until = $until;
    }

    /**
     * <p>Date and time (UTC) of the earliest expected delivery.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getFrom()
    {
        if (is_null($this->from)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FROM);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->from = $data;
        }

        return $this->from;
    }

    /**
     * <p>Date and time (UTC) of the latest expected delivery.
     * When both <code>from</code> and <code>until</code> are set, <code>until</code> must be equal to or later than <code>from</code>.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getUntil()
    {
        if (is_null($this->until)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->until = $data;
        }

        return $this->until;
    }


    /**
     * @param ?DateTimeImmutable $from
     */
    public function setFrom(?DateTimeImmutable $from): void
    {
        $this->from = $from;
    }

    /**
     * @param ?DateTimeImmutable $until
     */
    public function setUntil(?DateTimeImmutable $until): void
    {
        $this->until = $until;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[EstimatedDelivery::FIELD_FROM]) && $data[EstimatedDelivery::FIELD_FROM] instanceof \DateTimeImmutable) {
            $data[EstimatedDelivery::FIELD_FROM] = $data[EstimatedDelivery::FIELD_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[EstimatedDelivery::FIELD_UNTIL]) && $data[EstimatedDelivery::FIELD_UNTIL] instanceof \DateTimeImmutable) {
            $data[EstimatedDelivery::FIELD_UNTIL] = $data[EstimatedDelivery::FIELD_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
