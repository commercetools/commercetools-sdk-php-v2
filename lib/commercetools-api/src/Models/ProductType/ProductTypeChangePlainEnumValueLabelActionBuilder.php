<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangePlainEnumValueLabelAction>
 */
final class ProductTypeChangePlainEnumValueLabelActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var AttributePlainEnumValue|?AttributePlainEnumValueBuilder
     */
    private $newValue;

    /**
     * @var ?string
     */
    private $attributeName;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|AttributePlainEnumValue
     */
    public function getNewValue()
    {
        return $this->newValue instanceof AttributePlainEnumValueBuilder ? $this->newValue->build() : $this->newValue;
    }

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

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
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

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
            $this->action,
            ($this->newValue instanceof AttributePlainEnumValueBuilder ? $this->newValue->build() : $this->newValue),
            $this->attributeName
        );
    }

    public static function of(): ProductTypeChangePlainEnumValueLabelActionBuilder
    {
        return new self();
    }
}
