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
 * @implements Builder<RecurringOrderSetStartsAtAction>
 */
final class RecurringOrderSetStartsAtActionBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $startsAt;

    /**
     * <p>Date and time (UTC) the <a href="ctp:api:type:RecurringOrder">Recurring Order</a> should be started. The date and time must be in the future.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getStartsAt()
    {
        return $this->startsAt;
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


    public function build(): RecurringOrderSetStartsAtAction
    {
        return new RecurringOrderSetStartsAtActionModel(
            $this->startsAt
        );
    }

    public static function of(): RecurringOrderSetStartsAtActionBuilder
    {
        return new self();
    }
}
