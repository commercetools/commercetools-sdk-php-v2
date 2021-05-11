<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeNestedType>
 */
final class AttributeNestedTypeBuilder implements Builder
{
    /**
     * @var null|ProductTypeReference|ProductTypeReferenceBuilder
     */
    private $typeReference;

    /**
     * @return null|ProductTypeReference
     */
    public function getTypeReference()
    {
        return $this->typeReference instanceof ProductTypeReferenceBuilder ? $this->typeReference->build() : $this->typeReference;
    }

    /**
     * @param ?ProductTypeReference $typeReference
     * @return $this
     */
    public function withTypeReference(?ProductTypeReference $typeReference)
    {
        $this->typeReference = $typeReference;

        return $this;
    }

    /**
     * @deprecated use withTypeReference() instead
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
            $this->typeReference instanceof ProductTypeReferenceBuilder ? $this->typeReference->build() : $this->typeReference
        );
    }

    public static function of(): AttributeNestedTypeBuilder
    {
        return new self();
    }
}
