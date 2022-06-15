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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTypeSetInputTipAction>
 */
final class ProductTypeSetInputTipActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $inputTip;

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
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     * @return null|LocalizedString
     */
    public function getInputTip()
    {
        return $this->inputTip instanceof LocalizedStringBuilder ? $this->inputTip->build() : $this->inputTip;
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
     * @param ?LocalizedString $inputTip
     * @return $this
     */
    public function withInputTip(?LocalizedString $inputTip)
    {
        $this->inputTip = $inputTip;

        return $this;
    }

    /**
     * @deprecated use withInputTip() instead
     * @return $this
     */
    public function withInputTipBuilder(?LocalizedStringBuilder $inputTip)
    {
        $this->inputTip = $inputTip;

        return $this;
    }

    public function build(): ProductTypeSetInputTipAction
    {
        return new ProductTypeSetInputTipActionModel(
            $this->attributeName,
            $this->inputTip instanceof LocalizedStringBuilder ? $this->inputTip->build() : $this->inputTip
        );
    }

    public static function of(): ProductTypeSetInputTipActionBuilder
    {
        return new self();
    }
}
