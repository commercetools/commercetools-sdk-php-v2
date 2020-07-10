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
final class NumberFieldModel extends JsonObjectModel implements NumberField
{
    public const DISCRIMINATOR_VALUE = 'Number';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $value;


    public function __construct(
        int $value = null
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
     * @return null|int
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(NumberField::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (int) $data;
        }

        return $this->value;
    }

    public function setValue(?int $value): void
    {
        $this->value = $value;
    }



}
