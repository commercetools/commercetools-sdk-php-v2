<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceModel;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;
use Commercetools\Import\Models\Common\ProductVariantKeyReferenceModel;
use stdClass;

/**
 * @internal
 */
final class ProductVariantPatchModel extends JsonObjectModel implements ProductVariantPatch
{
    /**
     *
     * @var ?ProductVariantKeyReference
     */
    protected $productVariant;

    /**
     *
     * @var ?Attributes
     */
    protected $attributes;

    /**
     *
     * @var ?bool
     */
    protected $staged;

    /**
     *
     * @var ?ProductKeyReference
     */
    protected $product;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductVariantKeyReference $productVariant = null,
        ?Attributes $attributes = null,
        ?bool $staged = null,
        ?ProductKeyReference $product = null
    ) {
        $this->productVariant = $productVariant;
        $this->attributes = $attributes;
        $this->staged = $staged;
        $this->product = $product;
    }

    /**
     * <p>Reference to the <a href="/../api/projects/products#productvariant">ProductVariant</a> to update.
     * If the referenced ProductVariant does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary ProductVariant is created.</p>
     *
     *
     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant()
    {
        if (is_null($this->productVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->productVariant = ProductVariantKeyReferenceModel::of($data);
        }

        return $this->productVariant;
    }

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.</p>
     * <ul>
     * <li>The referenced Attribute must be defined in an existing <a href="/../api/projects/productTypes#producttype">ProductType</a>, or the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be <code>validationFailed</code>.</li>
     * <li>Setting the value of a non-required Attribute to <code>null</code> will remove the Attribute.</li>
     * <li>Attempting to set a <code>null</code> value to a required Attribute will make the import operation fail with an <a href="/error#invalidoperation">InvalidOperation</a> error.</li>
     * <li>Importing <a href="/product-variant#localizabletextattribute">LocalizableTextAttributes</a> or <a href="/product-variant#localizabletextsetattribute">LocalizableTextSetAttributes</a> follows an override pattern, meaning that omitted localized fields will be deleted, new fields will be created, and existing fields will be updated. You can also delete localized fields by setting their value to <code>null</code>.</li>
     * </ul>
     *
     *
     * @return null|Attributes
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }

            $this->attributes = AttributesModel::of($data);
        }

        return $this->attributes;
    }

    /**
     * <p>If <code>false</code>, the attribute changes are applied to both <a href="/../api/projects/productProjections#current--staged">current and staged projected representations</a> of the <a href="/../api/projects/products#product">Product</a>.</p>
     *
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>Reference to the <a href="/../api/projects/products#product">Product</a> which contains the ProductVariant. Setting a value will batch process the import operations to minimize concurrency errors. If set, this field is required for every ProductVariantPatch in the <a href="ctp:import:type:ProductVariantPatchRequest">ProductVariantPatchRequest</a>.</p>
     *
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductKeyReferenceModel::of($data);
        }

        return $this->product;
    }


    /**
     * @param ?ProductVariantKeyReference $productVariant
     */
    public function setProductVariant(?ProductVariantKeyReference $productVariant): void
    {
        $this->productVariant = $productVariant;
    }

    /**
     * @param ?Attributes $attributes
     */
    public function setAttributes(?Attributes $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void
    {
        $this->product = $product;
    }
}
