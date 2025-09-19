<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CounterModel extends JsonObjectModel implements Counter
{
    public const DISCRIMINATOR_VALUE = 'Counter';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?int
     */
    protected $totalToSkip;

    /**
     *
     * @var ?int
     */
    protected $skipped;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastSkippedAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $totalToSkip = null,
        ?int $skipped = null,
        ?DateTimeImmutable $lastSkippedAt = null,
        ?string $type = null
    ) {
        $this->totalToSkip = $totalToSkip;
        $this->skipped = $skipped;
        $this->lastSkippedAt = $lastSkippedAt;
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
     * <p>Number of Orders that will be skipped.</p>
     *
     *
     * @return null|int
     */
    public function getTotalToSkip()
    {
        if (is_null($this->totalToSkip)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TOTAL_TO_SKIP);
            if (is_null($data)) {
                return null;
            }
            $this->totalToSkip = (int) $data;
        }

        return $this->totalToSkip;
    }

    /**
     * <p>Number of Orders that were already skipped.</p>
     *
     *
     * @return null|int
     */
    public function getSkipped()
    {
        if (is_null($this->skipped)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_SKIPPED);
            if (is_null($data)) {
                return null;
            }
            $this->skipped = (int) $data;
        }

        return $this->skipped;
    }

    /**
     * <p>Date and time (UTC) when the last Order creation was skipped.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastSkippedAt()
    {
        if (is_null($this->lastSkippedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_SKIPPED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastSkippedAt = $data;
        }

        return $this->lastSkippedAt;
    }


    /**
     * @param ?int $totalToSkip
     */
    public function setTotalToSkip(?int $totalToSkip): void
    {
        $this->totalToSkip = $totalToSkip;
    }

    /**
     * @param ?int $skipped
     */
    public function setSkipped(?int $skipped): void
    {
        $this->skipped = $skipped;
    }

    /**
     * @param ?DateTimeImmutable $lastSkippedAt
     */
    public function setLastSkippedAt(?DateTimeImmutable $lastSkippedAt): void
    {
        $this->lastSkippedAt = $lastSkippedAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Counter::FIELD_LAST_SKIPPED_AT]) && $data[Counter::FIELD_LAST_SKIPPED_AT] instanceof \DateTimeImmutable) {
            $data[Counter::FIELD_LAST_SKIPPED_AT] = $data[Counter::FIELD_LAST_SKIPPED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
