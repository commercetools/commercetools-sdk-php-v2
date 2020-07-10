<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

use DateTimeImmutable;
use DateTimeImmutableModel;

/**
 * @internal
 */
final class DateTimeFieldModel extends JsonObjectModel implements DateTimeField
{
    public const DISCRIMINATOR_VALUE = 'DateTime';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?DateTimeImmutable
     */
    protected $value;


    public function __construct(
        DateTimeImmutable $value = null
    ) {
        $this->value = $value;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of this field.</p>
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomField::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DateTimeField::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->value = $data;
        }

        return $this->value;
    }

    public function setValue(?DateTimeImmutable $value): void
    {
        $this->value = $value;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[DateTimeField::FIELD_VALUE]) && $data[DateTimeField::FIELD_VALUE] instanceof \DateTimeImmutable) {
            $data[DateTimeField::FIELD_VALUE] = $data[DateTimeField::FIELD_VALUE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }

}
