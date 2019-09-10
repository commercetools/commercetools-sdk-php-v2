<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeNestedType>
 */
final class AttributeNestedTypeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ProductTypeReference|?ProductTypeReferenceBuilder
     */
    private $typeReference;

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
     * @return null|ProductTypeReference
     */
    public function getTypeReference()
    {
        return $this->typeReference instanceof ProductTypeReferenceBuilder ? $this->typeReference->build() : $this->typeReference;
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
    public function withTypeReference(?ProductTypeReference $typeReference)
    {
        $this->typeReference = $typeReference;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTypeReferenceBuilder(?ProductTypeReferenceBuilder $typeReference)
    {
        $this->typeReference = $typeReference;

        return $this;
    }

    public function build(): AttributeNestedType
    {
        return new AttributeNestedTypeModel(
            $this->name,
            ($this->typeReference instanceof ProductTypeReferenceBuilder ? $this->typeReference->build() : $this->typeReference)
        );
    }

    public static function of(): AttributeNestedTypeBuilder
    {
        return new self();
    }
}
