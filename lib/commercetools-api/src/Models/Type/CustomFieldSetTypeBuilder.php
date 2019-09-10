<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomFieldSetType>
 */
final class CustomFieldSetTypeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var FieldType|?FieldTypeBuilder
     */
    private $elementType;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|FieldType
     */
    public function getElementType()
    {
        return $this->elementType instanceof FieldTypeBuilder ? $this->elementType->build() : $this->elementType;
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
    public function withElementType(?FieldType $elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withElementTypeBuilder(?FieldTypeBuilder $elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

    public function build(): CustomFieldSetType
    {
        return new CustomFieldSetTypeModel(
            $this->name,
            ($this->elementType instanceof FieldTypeBuilder ? $this->elementType->build() : $this->elementType)
        );
    }

    public static function of(): CustomFieldSetTypeBuilder
    {
        return new self();
    }
}
