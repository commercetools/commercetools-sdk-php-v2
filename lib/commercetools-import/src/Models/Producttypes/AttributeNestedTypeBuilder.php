<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ProductTypeKeyReference;
use Commercetools\Import\Models\Common\ProductTypeKeyReferenceBuilder;
use stdClass;

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
     * <p>References a product type by key.</p>
     *

     * @return null|ProductTypeKeyReference
     */
    public function getTypeReference()
    {
        return $this->typeReference instanceof ProductTypeKeyReferenceBuilder ? $this->typeReference->build() : $this->typeReference;
    }

    /**
     * @param ?ProductTypeKeyReference $typeReference
     * @return $this
     */
    public function withTypeReference(?ProductTypeKeyReference $typeReference)
    {
        $this->typeReference = $typeReference;

        return $this;
    }

    /**
     * @deprecated use withTypeReference() instead
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
