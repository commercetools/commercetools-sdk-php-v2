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
 * @implements Builder<ProductTypeChangePlainEnumValueLabelAction>
 */
final class ProductTypeChangePlainEnumValueLabelActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var null|AttributePlainEnumValue|AttributePlainEnumValueBuilder
     */
    private $newValue;

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|AttributePlainEnumValue
     */
    public function getNewValue()
    {
        return $this->newValue instanceof AttributePlainEnumValueBuilder ? $this->newValue->build() : $this->newValue;
    }

    /**
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewValue(?AttributePlainEnumValue $newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewValueBuilder(?AttributePlainEnumValueBuilder $newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    public function build(): ProductTypeChangePlainEnumValueLabelAction
    {
        return new ProductTypeChangePlainEnumValueLabelActionModel(
            $this->attributeName,
            $this->newValue instanceof AttributePlainEnumValueBuilder ? $this->newValue->build() : $this->newValue
        );
    }

    public static function of(): ProductTypeChangePlainEnumValueLabelActionBuilder
    {
        return new self();
    }
}
