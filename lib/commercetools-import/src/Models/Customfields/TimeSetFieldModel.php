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
use stdClass;

/**
 * @internal
 */
final class TimeSetFieldModel extends JsonObjectModel implements TimeSetField
{
    public const DISCRIMINATOR_VALUE = 'TimeSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DateTimeImmutableCollection
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutableCollection $value = null,
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
     * <p>JSON array of time values in the format <code>HH:mm:ss.SSS</code>.
     * The time zone is optional and defaults to UTC if not specified.
     * If the time zone is specified, it must be in the format <code>±HH:mm</code> or <code>Z</code> for UTC.
     * The order of items in the array is not fixed.</p>
     *
     *
     * @return null|DateTimeImmutableCollection
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?list<string> $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = new DateTimeImmutableCollection($data);
        }

        return $this->value;
    }


    /**
     * @param ?DateTimeImmutableCollection $value
     */
    public function setValue(?DateTimeImmutableCollection $value): void
    {
        $this->value = $value;
    }
}
