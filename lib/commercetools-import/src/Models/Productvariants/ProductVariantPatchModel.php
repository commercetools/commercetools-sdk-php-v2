<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

use Models\Common\ProductKeyReference;
use Models\Common\ProductKeyReferenceModel;
use Models\Common\ProductVariantKeyReference;
use Models\Common\ProductVariantKeyReferenceModel;

/**
 * @internal
 */
final class ProductVariantPatchModel extends JsonObjectModel implements ProductVariantPatch
{

    /**
     * @var ?ProductVariantKeyReference
     */
    protected $productVariant;

    /**
     * @var ?ProductKeyReference
     */
    protected $product;

    /**
     * @var ?Attributes
     */
    protected $attributes;


    public function __construct(
        ProductVariantKeyReference $productVariant = null,
        ProductKeyReference $product = null,
        Attributes $attributes = null
    ) {
        $this->productVariant = $productVariant;
        $this->product = $product;
        $this->attributes = $attributes;

    }

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
        if (is_null($this->productVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductVariantPatch::FIELD_PRODUCT_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->productVariant = ProductVariantKeyReferenceModel::of($data);
        }

        return $this->productVariant;
    }

    /**
     * <p>The product in which the patched product variant resides. Maps to <code>ProductVariant.product</code>.</p>
     * <p>The product referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductVariantPatch::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductKeyReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.</p>
     * <p>Each attribute referenced must be defined
     * in an already existing product type in the commercetools project, or the import
     * operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|Attributes
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductVariantPatch::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }

            $this->attributes = AttributesModel::of($data);
        }

        return $this->attributes;
    }

    public function setProductVariant(?ProductVariantKeyReference $productVariant): void
    {
        $this->productVariant = $productVariant;
    }

    public function setProduct(?ProductKeyReference $product): void
    {
        $this->product = $product;
    }

    public function setAttributes(?Attributes $attributes): void
    {
        $this->attributes = $attributes;
    }



}
