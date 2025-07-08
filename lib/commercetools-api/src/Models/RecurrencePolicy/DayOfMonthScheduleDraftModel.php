<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DayOfMonthScheduleDraftModel extends JsonObjectModel implements DayOfMonthScheduleDraft
{
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?int
     */
    protected $day;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $day = null,
        ?string $type = null
    ) {
        $this->day = $day;
        $this->type = $type;
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
     * <p>The day of the month when the <a href="ctp:api:type:RecurringOrder">Recurring Order</a> should be created.
     * If the value is greater than the number of days in a given month, the order will be created on the last day of the month.</p>
     *
     *
     * @return null|int
     */
    public function getDay()
    {
        if (is_null($this->day)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DAY);
            if (is_null($data)) {
                return null;
            }
            $this->day = (int) $data;
        }

        return $this->day;
    }


    /**
     * @param ?int $day
     */
    public function setDay(?int $day): void
    {
        $this->day = $day;
    }
}
