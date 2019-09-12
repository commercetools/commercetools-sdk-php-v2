<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportReferenceBuilder;

/**
 * @implements Builder<ProductVariantPatch>
 */
final class ProductVariantPatchBuilder implements Builder
{
    /**
     * @var ImportReference|?ImportReferenceBuilder
     */
    private $productVariant;

    /**
     * @var Attributes|?AttributesBuilder
     */
    private $attributes;

    public function __construct()
    {
    }

    /**
     * <p>The product variant to which this patch is applied.</p>.
     *
     * @return null|ImportReference
     */
    public function getProductVariant()
    {
        return $this->productVariant instanceof ImportReferenceBuilder ? $this->productVariant->build() : $this->productVariant;
    }

    /**
     * @return null|Attributes
     */
    public function getAttributes()
    {
        return $this->attributes instanceof AttributesBuilder ? $this->attributes->build() : $this->attributes;
    }

    /**
     * @return $this
     */
    public function withProductVariant(?ImportReference $productVariant)
    {
        $this->productVariant = $productVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributes(?Attributes $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductVariantBuilder(?ImportReferenceBuilder $productVariant)
    {
        $this->productVariant = $productVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributesBuilder(?AttributesBuilder $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function build(): ProductVariantPatch
    {
        return new ProductVariantPatchModel(
            ($this->productVariant instanceof ImportReferenceBuilder ? $this->productVariant->build() : $this->productVariant),
            ($this->attributes instanceof AttributesBuilder ? $this->attributes->build() : $this->attributes)
        );
    }

    public static function of(): ProductVariantPatchBuilder
    {
        return new self();
    }
}
