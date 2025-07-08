<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<RecurringOrderStartsAtSetMessagePayload>
 */
final class RecurringOrderStartsAtSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $startsAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $oldStartsAt;

    /**
     * <p>Start date and time of the Recurring Order after the <a href="ctp:api:type:RecurringOrderSetStartsAtAction">Set Starts At</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * <p>Start date and time of the Recurring Order before the <a href="ctp:api:type:RecurringOrderSetStartsAtAction">Set Starts At</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getOldStartsAt()
    {
        return $this->oldStartsAt;
    }

    /**
     * @param ?DateTimeImmutable $startsAt
     * @return $this
     */
    public function withStartsAt(?DateTimeImmutable $startsAt)
    {
        $this->startsAt = $startsAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $oldStartsAt
     * @return $this
     */
    public function withOldStartsAt(?DateTimeImmutable $oldStartsAt)
    {
        $this->oldStartsAt = $oldStartsAt;

        return $this;
    }


    public function build(): RecurringOrderStartsAtSetMessagePayload
    {
        return new RecurringOrderStartsAtSetMessagePayloadModel(
            $this->startsAt,
            $this->oldStartsAt
        );
    }

    public static function of(): RecurringOrderStartsAtSetMessagePayloadBuilder
    {
        return new self();
    }
}
