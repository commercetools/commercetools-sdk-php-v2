<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeSetType>
 */
final class AttributeSetTypeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var AttributeType|?AttributeTypeBuilder
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
     * @return null|AttributeType
     */
    public function getElementType()
    {
        return $this->elementType instanceof AttributeTypeBuilder ? $this->elementType->build() : $this->elementType;
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
            $this->name,
            ($this->elementType instanceof AttributeTypeBuilder ? $this->elementType->build() : $this->elementType)
        );
    }

    public static function of(): AttributeSetTypeBuilder
    {
        return new self();
    }
}
