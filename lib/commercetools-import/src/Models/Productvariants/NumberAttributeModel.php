<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\JsonObjectModel;

final class NumberAttributeModel extends JsonObjectModel implements NumberAttribute
{
    const DISCRIMINATOR_VALUE = 'number';
    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $value;

    public function __construct(
        string $name = null,
        int $value = null
    ) {
        $this->name = $name;
        $this->value = $value;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The name of this attribute must match a name of the product types attribute definitions.
     * The name is required if this type is used in a product variant and must not be set when
     * used in a product variant patch.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Attribute::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Attribute::FIELD_TYPE);
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
            $data = $this->raw(NumberAttribute::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (int) $data;
        }

        return $this->value;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setValue(?int $value): void
    {
        $this->value = $value;
    }
}
