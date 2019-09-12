<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\EnumValue;
use Commercetools\Import\Models\Common\EnumValueBuilder;

/**
 * @implements Builder<EnumAttribute>
 */
final class EnumAttributeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $type;

    /**
     * @var EnumValue|?EnumValueBuilder
     */
    private $value;

    public function __construct()
    {
    }

    /**
     * <p>For now we reuse this type in two different context. And that's why the name is required when used in the full import.
     * And why the name isn't required when used in patch.</p>.
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|EnumValue
     */
    public function getValue()
    {
        return $this->value instanceof EnumValueBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?EnumValue $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?EnumValueBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): EnumAttribute
    {
        return new EnumAttributeModel(
            $this->name,
            $this->type,
            ($this->value instanceof EnumValueBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): EnumAttributeBuilder
    {
        return new self();
    }
}
