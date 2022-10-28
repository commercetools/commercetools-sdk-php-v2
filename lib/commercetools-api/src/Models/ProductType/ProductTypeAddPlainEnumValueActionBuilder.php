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
 * @implements Builder<ProductTypeAddPlainEnumValueAction>
 */
final class ProductTypeAddPlainEnumValueActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $attributeName;

    /**

     * @var null|AttributePlainEnumValue|AttributePlainEnumValueBuilder
     */
    private $value;

    /**
     * <p>Name of the AttributeDefinition to update.</p>
     *

     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * <p>Value to append to the array.</p>
     *

     * @return null|AttributePlainEnumValue
     */
    public function getValue()
    {
        return $this->value instanceof AttributePlainEnumValueBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @param ?AttributePlainEnumValue $value
     * @return $this
     */
    public function withValue(?AttributePlainEnumValue $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?AttributePlainEnumValueBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): ProductTypeAddPlainEnumValueAction
    {
        return new ProductTypeAddPlainEnumValueActionModel(
            $this->attributeName,
            $this->value instanceof AttributePlainEnumValueBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): ProductTypeAddPlainEnumValueActionBuilder
    {
        return new self();
    }
}
