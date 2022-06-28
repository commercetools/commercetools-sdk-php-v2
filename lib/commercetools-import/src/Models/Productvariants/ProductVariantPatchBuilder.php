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
     * @var ?bool
     */
    private $staged;

    /**
     * <p>The <a href="/../api/projects/products#productvariant">ProductVariant</a> to which this patch is applied.
     * The Reference to the <a href="/../api/projects/products#productvariant">ProductVariant</a> with which the ProductVariantPatch is associated.
     * If referenced ProductVariant does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary ProductVariant is created.</p>
     *
     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant()
    {
        return $this->productVariant instanceof ProductVariantKeyReferenceBuilder ? $this->productVariant->build() : $this->productVariant;
    }

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.
     * The referenced attribute must be defined in an already existing <a href="/../api/projects/productTypes#producttype">ProductType</a> in the Project, or the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be <code>unresolved</code>.</p>
     *
     * @return null|Attributes
     */
    public function getAttributes()
    {
        return $this->attributes instanceof AttributesBuilder ? $this->attributes->build() : $this->attributes;
    }

    /**
     * <p>If <code>false</code>, the attribute changes are applied to both <a href="/../api/projects/productProjections#current--staged">current and staged projected representations</a> of the <a href="/../api/projects/products#product">Product</a>.</p>
     *
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
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
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @deprecated use withProductVariant() instead
     * @return $this
     */
    public function withProductVariantBuilder(?ProductVariantKeyReferenceBuilder $productVariant)
    {
        $this->productVariant = $productVariant;

        return $this;
    }

    /**
     * @deprecated use withAttributes() instead
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
            $this->attributes instanceof AttributesBuilder ? $this->attributes->build() : $this->attributes,
            $this->staged
        );
    }

    public static function of(): ProductVariantPatchBuilder
    {
        return new self();
    }
}
