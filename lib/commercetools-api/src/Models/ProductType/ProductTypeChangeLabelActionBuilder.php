<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangeLabelAction>
 */
final class ProductTypeChangeLabelActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $label;

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        return $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label;
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
    public function withLabel(?LocalizedString $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLabelBuilder(?LocalizedStringBuilder $label)
    {
        $this->label = $label;

        return $this;
    }

    public function build(): ProductTypeChangeLabelAction
    {
        return new ProductTypeChangeLabelActionModel(
            $this->attributeName,
            $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label
        );
    }

    public static function of(): ProductTypeChangeLabelActionBuilder
    {
        return new self();
    }
}
