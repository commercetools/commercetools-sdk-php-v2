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
 * @implements Builder<AttributeSetType>
 */
final class AttributeSetTypeBuilder implements Builder
{
    /**

     * @var null|AttributeType|AttributeTypeBuilder
     */
    private $elementType;

    /**
     * <p>Attribute type of the elements in the set.</p>
     *

     * @return null|AttributeType
     */
    public function getElementType()
    {
        return $this->elementType instanceof AttributeTypeBuilder ? $this->elementType->build() : $this->elementType;
    }

    /**
     * @param ?AttributeType $elementType
     * @return $this
     */
    public function withElementType(?AttributeType $elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

    /**
     * @deprecated use withElementType() instead
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
            $this->elementType instanceof AttributeTypeBuilder ? $this->elementType->build() : $this->elementType
        );
    }

    public static function of(): AttributeSetTypeBuilder
    {
        return new self();
    }
}
