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
 * @implements Builder<ProductTypeChangeLocalizedEnumValueLabelAction>
 */
final class ProductTypeChangeLocalizedEnumValueLabelActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var null|AttributeLocalizedEnumValue|AttributeLocalizedEnumValueBuilder
     */
    private $newValue;

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
     * <p>New value to set. Must be different from the existing value.</p>
     *
     * @return null|AttributeLocalizedEnumValue
     */
    public function getNewValue()
    {
        return $this->newValue instanceof AttributeLocalizedEnumValueBuilder ? $this->newValue->build() : $this->newValue;
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
     * @param ?AttributeLocalizedEnumValue $newValue
     * @return $this
     */
    public function withNewValue(?AttributeLocalizedEnumValue $newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    /**
     * @deprecated use withNewValue() instead
     * @return $this
     */
    public function withNewValueBuilder(?AttributeLocalizedEnumValueBuilder $newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    public function build(): ProductTypeChangeLocalizedEnumValueLabelAction
    {
        return new ProductTypeChangeLocalizedEnumValueLabelActionModel(
            $this->attributeName,
            $this->newValue instanceof AttributeLocalizedEnumValueBuilder ? $this->newValue->build() : $this->newValue
        );
    }

    public static function of(): ProductTypeChangeLocalizedEnumValueLabelActionBuilder
    {
        return new self();
    }
}
