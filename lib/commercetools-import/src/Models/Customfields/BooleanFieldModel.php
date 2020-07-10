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
final class BooleanFieldModel extends JsonObjectModel implements BooleanField
{
    public const DISCRIMINATOR_VALUE = 'Boolean';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?bool
     */
    protected $value;


    public function __construct(
        bool $value = null
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
     * @return null|bool
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(BooleanField::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (bool) $data;
        }

        return $this->value;
    }

    public function setValue(?bool $value): void
    {
        $this->value = $value;
    }



}
