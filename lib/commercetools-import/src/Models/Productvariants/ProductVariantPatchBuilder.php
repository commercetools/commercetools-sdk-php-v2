<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;
use Commercetools\Import\Models\Common\ProductVariantKeyReferenceBuilder;
use stdClass;

/**
 * @implements Builder<ProductVariantPatch>
 */
final class ProductVariantPatchBuilder implements Builder
{
    /**
     * @var null|ProductVariantKeyReference|ProductVariantKeyReferenceBuilder
     */
    private $productVariant;

    /**
     * @var null|Attributes|AttributesBuilder
     */
    private $attributes;

    /**
     * <p>The product variant to which this patch is applied.</p>
     * <p>The product variant referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant()
    {
        return $this->productVariant instanceof ProductVariantKeyReferenceBuilder ? $this->productVariant->build() : $this->productVariant;
    }

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.</p>
     * <p>Each attribute referenced must be defined
     * in an already existing product type in the commercetools project, or the import
     * operation state is set to <code>ValidationFailed</code>.</p>
     *
     * @return null|Attributes
     */
    public function getAttributes()
    {
        return $this->attributes instanceof AttributesBuilder ? $this->attributes->build() : $this->attributes;
    }

    /**
     * @param ?ProductVariantKeyReference $productVariant
     * @return $this
     */
    public function withProductVariant(?ProductVariantKeyReference $productVariant)
    {
        $this->productVariant = $productVariant;

        return $this;
    }

    /**
     * @param ?Attributes $attributes
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
    public function withProductVariantBuilder(?ProductVariantKeyReferenceBuilder $productVariant)
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
            $this->productVariant instanceof ProductVariantKeyReferenceBuilder ? $this->productVariant->build() : $this->productVariant,
            $this->attributes instanceof AttributesBuilder ? $this->attributes->build() : $this->attributes
        );
    }

    public static function of(): ProductVariantPatchBuilder
    {
        return new self();
    }
}
