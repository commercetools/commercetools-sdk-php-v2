<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class DateFieldModel extends JsonObjectModel implements DateField
{
    public const DISCRIMINATOR_VALUE = 'Date';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $value = null,
        ?string $type = null
    ) {
        $this->value = $value;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of this field.</p>
     *
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
     *
     * @return null|DateTimeImmutable
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATE_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->value = $data;
        }

        return $this->value;
    }


    /**
     * @param ?DateTimeImmutable $value
     */
    public function setValue(?DateTimeImmutable $value): void
    {
        $this->value = $value;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[DateField::FIELD_VALUE]) && $data[DateField::FIELD_VALUE] instanceof \DateTimeImmutable) {
            $data[DateField::FIELD_VALUE] = $data[DateField::FIELD_VALUE]->format('Y-m-d');
        }
        return (object) $data;
    }
}
