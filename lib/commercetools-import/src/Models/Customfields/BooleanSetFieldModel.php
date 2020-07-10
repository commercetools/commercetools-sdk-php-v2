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


/**
 * @internal
 */
final class BooleanSetFieldModel extends JsonObjectModel implements BooleanSetField
{
    public const DISCRIMINATOR_VALUE = 'BooleanSet';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?array
     */
    protected $value;


    public function __construct(
        array $value = null
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
     * @return null|array
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(BooleanSetField::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = $data;
        }

        return $this->value;
    }

    public function setValue(?array $value): void
    {
        $this->value = $value;
    }



}
