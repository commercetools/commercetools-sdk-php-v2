<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeAddLocalizedEnumValueAction>
 */
final class ProductTypeAddLocalizedEnumValueActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var AttributeLocalizedEnumValue|?AttributeLocalizedEnumValueBuilder
     */
    private $value;

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
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|AttributeLocalizedEnumValue
     */
    public function getValue()
    {
        return $this->value instanceof AttributeLocalizedEnumValueBuilder ? $this->value->build() : $this->value;
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
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?AttributeLocalizedEnumValue $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?AttributeLocalizedEnumValueBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): ProductTypeAddLocalizedEnumValueAction
    {
        return new ProductTypeAddLocalizedEnumValueActionModel(
            $this->action,
            $this->attributeName,
            ($this->value instanceof AttributeLocalizedEnumValueBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): ProductTypeAddLocalizedEnumValueActionBuilder
    {
        return new self();
    }
}
