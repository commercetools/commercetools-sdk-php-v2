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
final class NumberFieldModel extends JsonObjectModel implements NumberField
{
    public const DISCRIMINATOR_VALUE = 'Number';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?float
     */
    protected $value;


    public function __construct(
        float $value = null
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
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|float
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (float) $data;
        }

        return $this->value;
    }


    public function setValue(?float $value): void
    {
        $this->value = $value;
    }
}
