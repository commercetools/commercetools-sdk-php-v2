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
final class StringSetFieldModel extends JsonObjectModel implements StringSetField
{
    public const DISCRIMINATOR_VALUE = 'StringSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?array
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $value = null,
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
     * <p>JSON array of strings.
     * The order of items in the array is not fixed.</p>
     *
     *
     * @return null|array
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = $data;
        }

        return $this->value;
    }


    /**
     * @param ?array $value
     */
    public function setValue(?array $value): void
    {
        $this->value = $value;
    }
}
