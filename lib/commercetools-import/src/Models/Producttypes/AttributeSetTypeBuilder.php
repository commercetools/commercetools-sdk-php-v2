<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeSetType>
 */
final class AttributeSetTypeBuilder implements Builder
{
    /**
     * @var AttributeType|?AttributeTypeBuilder
     */
    private $elementType;

    /**
     * @return null|AttributeType
     */
    public function getElementType()
    {
        return $this->elementType instanceof AttributeTypeBuilder ? $this->elementType->build() : $this->elementType;
    }

    /**
     * @return $this
     */
    public function withElementType(?AttributeType $elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withElementTypeBuilder(?AttributeTypeBuilder $elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

    public function build(): AttributeSetType
    {
        return new AttributeSetTypeModel(
            ($this->elementType instanceof AttributeTypeBuilder ? $this->elementType->build() : $this->elementType)
        );
    }

    public static function of(): AttributeSetTypeBuilder
    {
        return new self();
    }
}
