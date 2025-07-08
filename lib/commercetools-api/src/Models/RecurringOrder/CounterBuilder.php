<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<Counter>
 */
final class CounterBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $totalToSkip;

    /**

     * @var ?int
     */
    private $skipped;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastSkippedAt;

    /**
     * <p>Number of Orders that will be skipped.</p>
     *

     * @return null|int
     */
    public function getTotalToSkip()
    {
        return $this->totalToSkip;
    }

    /**
     * <p>Number of Orders that were already skipped.</p>
     *

     * @return null|int
     */
    public function getSkipped()
    {
        return $this->skipped;
    }

    /**
     * <p>Date and time (UTC) when the last Order creation was skipped.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastSkippedAt()
    {
        return $this->lastSkippedAt;
    }

    /**
     * @param ?int $totalToSkip
     * @return $this
     */
    public function withTotalToSkip(?int $totalToSkip)
    {
        $this->totalToSkip = $totalToSkip;

        return $this;
    }

    /**
     * @param ?int $skipped
     * @return $this
     */
    public function withSkipped(?int $skipped)
    {
        $this->skipped = $skipped;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastSkippedAt
     * @return $this
     */
    public function withLastSkippedAt(?DateTimeImmutable $lastSkippedAt)
    {
        $this->lastSkippedAt = $lastSkippedAt;

        return $this;
    }


    public function build(): Counter
    {
        return new CounterModel(
            $this->totalToSkip,
            $this->skipped,
            $this->lastSkippedAt
        );
    }

    public static function of(): CounterBuilder
    {
        return new self();
    }
}
