<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\ProductTypeKeyReference;
use Commercetools\Import\Models\Common\ProductTypeKeyReferenceBuilder;

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
     * @var ProductTypeKeyReference|?ProductTypeKeyReferenceBuilder
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
     * <p>References a product type by its key.</p>.
     *
     * @return null|ProductTypeKeyReference
     */
    public function getTypeReference()
    {
        return $this->typeReference instanceof ProductTypeKeyReferenceBuilder ? $this->typeReference->build() : $this->typeReference;
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
    public function withTypeReference(?ProductTypeKeyReference $typeReference)
    {
        $this->typeReference = $typeReference;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTypeReferenceBuilder(?ProductTypeKeyReferenceBuilder $typeReference)
    {
        $this->typeReference = $typeReference;

        return $this;
    }

    public function build(): AttributeNestedType
    {
        return new AttributeNestedTypeModel(
            $this->name,
            ($this->typeReference instanceof ProductTypeKeyReferenceBuilder ? $this->typeReference->build() : $this->typeReference)
        );
    }

    public static function of(): AttributeNestedTypeBuilder
    {
        return new self();
    }
}
