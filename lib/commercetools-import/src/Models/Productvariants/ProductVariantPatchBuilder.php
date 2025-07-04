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
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceBuilder;
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

     * @var null|ProductKeyReference|ProductKeyReferenceBuilder
     */
    private $product;

    /**
     * <p>Reference to the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to update.</p>
     *

     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant()
    {
        return $this->productVariant instanceof ProductVariantKeyReferenceBuilder ? $this->productVariant->build() : $this->productVariant;
    }

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.</p>
     * <ul>
     * <li>The referenced Attribute must be defined in an existing <a href="ctp:api:type:ProductType">ProductType</a>, or the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be <code>validationFailed</code>.</li>
     * <li>Setting the value of a non-required Attribute to <code>null</code> will remove the Attribute.</li>
     * <li>Attempting to set a <code>null</code> value to a required Attribute will make the import operation fail with an <a href="ctp:import:type:InvalidOperation">InvalidOperation</a> error.</li>
     * <li>Importing <a href="ctp:import:type:LocalizableTextAttribute">LocalizableTextAttributes</a> or <a href="ctp:import:type:LocalizableTextSetAttribute">LocalizableTextSetAttributes</a> follows an override pattern, meaning that omitted localized fields will be deleted, new fields will be created, and existing fields will be updated. You can delete localized fields by setting their value to <code>null</code>.</li>
     * </ul>
     *

     * @return null|Attributes
     */
    public function getAttributes()
    {
        return $this->attributes instanceof AttributesBuilder ? $this->attributes->build() : $this->attributes;
    }

    /**
     * <p>If <code>false</code>, the attribute changes are applied to both <a href="/projects/productProjections#current--staged">current and staged projected representations</a> of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>Reference to the <a href="ctp:api:type:Product">Product</a> that contains the ProductVariant.</p>
     * <p>We recommend to set this value to minimize concurrency errors.
     * If set, this field is required for every ProductVariantPatch in the <a href="ctp:import:type:ProductVariantPatchRequest">ProductVariantPatchRequest</a>.</p>
     * <p>If the referenced Product does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Product is created.</p>
     *

     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product;
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
     * @param ?ProductKeyReference $product
     * @return $this
     */
    public function withProduct(?ProductKeyReference $product)
    {
        $this->product = $product;

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

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductKeyReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    public function build(): ProductVariantPatch
    {
        return new ProductVariantPatchModel(
            $this->productVariant instanceof ProductVariantKeyReferenceBuilder ? $this->productVariant->build() : $this->productVariant,
            $this->attributes instanceof AttributesBuilder ? $this->attributes->build() : $this->attributes,
            $this->staged,
            $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product
        );
    }

    public static function of(): ProductVariantPatchBuilder
    {
        return new self();
    }
}
