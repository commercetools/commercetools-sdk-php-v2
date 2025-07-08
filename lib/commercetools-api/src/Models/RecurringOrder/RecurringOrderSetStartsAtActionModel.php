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
final class RecurringOrderSetStartsAtActionModel extends JsonObjectModel implements RecurringOrderSetStartsAtAction
{
    public const DISCRIMINATOR_VALUE = 'setStartsAt';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $startsAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $startsAt = null,
        ?string $action = null
    ) {
        $this->startsAt = $startsAt;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Date and time (UTC) the <a href="ctp:api:type:RecurringOrder">Recurring Order</a> should be started. The date and time must be in the future.</p>
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
     * @param ?DateTimeImmutable $startsAt
     */
    public function setStartsAt(?DateTimeImmutable $startsAt): void
    {
        $this->startsAt = $startsAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[RecurringOrderSetStartsAtAction::FIELD_STARTS_AT]) && $data[RecurringOrderSetStartsAtAction::FIELD_STARTS_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderSetStartsAtAction::FIELD_STARTS_AT] = $data[RecurringOrderSetStartsAtAction::FIELD_STARTS_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
