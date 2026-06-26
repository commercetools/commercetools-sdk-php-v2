<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Variant\VariantResourceIdentifier;
use Commercetools\Api\Models\Variant\VariantResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSetDefaultVariantAction>
 */
final class ProductSetDefaultVariantActionBuilder implements Builder
{
    /**

     * @var null|VariantResourceIdentifier|VariantResourceIdentifierBuilder
     */
    private $variant;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The Variant to set as default. If empty, any existing value will be removed.</p>
     *

     * @return null|VariantResourceIdentifier
     */
    public function getVariant()
    {
        return $this->variant instanceof VariantResourceIdentifierBuilder ? $this->variant->build() : $this->variant;
    }

    /**
     * <p>If <code>true</code>, only the staged <code>defaultVariant</code> is updated. If <code>false</code>, both the current and staged <code>defaultVariant</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?VariantResourceIdentifier $variant
     * @return $this
     */
    public function withVariant(?VariantResourceIdentifier $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @deprecated use withVariant() instead
     * @return $this
     */
    public function withVariantBuilder(?VariantResourceIdentifierBuilder $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    public function build(): ProductSetDefaultVariantAction
    {
        return new ProductSetDefaultVariantActionModel(
            $this->variant instanceof VariantResourceIdentifierBuilder ? $this->variant->build() : $this->variant,
            $this->staged
        );
    }

    public static function of(): ProductSetDefaultVariantActionBuilder
    {
        return new self();
    }
}
