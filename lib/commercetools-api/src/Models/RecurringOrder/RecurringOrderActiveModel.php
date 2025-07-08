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
final class RecurringOrderActiveModel extends JsonObjectModel implements RecurringOrderActive
{
    public const DISCRIMINATOR_VALUE = 'active';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $resumesAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $resumesAt = null,
        ?string $type = null
    ) {
        $this->resumesAt = $resumesAt;
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
     * <p>If set, the Recurring Order will automatically resume at the date and time (UTC) specified.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getResumesAt()
    {
        if (is_null($this->resumesAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RESUMES_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->resumesAt = $data;
        }

        return $this->resumesAt;
    }


    /**
     * @param ?DateTimeImmutable $resumesAt
     */
    public function setResumesAt(?DateTimeImmutable $resumesAt): void
    {
        $this->resumesAt = $resumesAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[RecurringOrderActive::FIELD_RESUMES_AT]) && $data[RecurringOrderActive::FIELD_RESUMES_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderActive::FIELD_RESUMES_AT] = $data[RecurringOrderActive::FIELD_RESUMES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
