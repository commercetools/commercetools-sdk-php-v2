<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use Models\Common\ProductTypeKeyReference;
use Models\Common\ProductTypeKeyReferenceBuilder;

/**
 * @implements Builder<AttributeNestedType>
 */
final class AttributeNestedTypeBuilder implements Builder
{
    /**
     * @var null|ProductTypeKeyReference|ProductTypeKeyReferenceBuilder
     */
    private $typeReference;

    /**
     * <p>References a product type by its key.</p>
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
            $this->typeReference instanceof ProductTypeKeyReferenceBuilder ? $this->typeReference->build() : $this->typeReference
        );
    }

    public static function of(): AttributeNestedTypeBuilder
    {
        return new self();
    }
}
