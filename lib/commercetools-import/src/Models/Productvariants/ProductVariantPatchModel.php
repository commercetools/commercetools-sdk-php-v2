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
use Commercetools\Import\Models\Common\ProductVariantKeyReference;
use Commercetools\Import\Models\Common\ProductVariantKeyReferenceModel;
use stdClass;

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

     * @var ?Attributes
     */
    protected $attributes;

    /**

     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductVariantKeyReference $productVariant = null,
        ?Attributes $attributes = null,
        ?bool $staged = null
    ) {
        $this->productVariant = $productVariant;
        $this->attributes = $attributes;
        $this->staged = $staged;
    }

    /**
     * <p>The <a href="/../api/projects/products#productvariant">ProductVariant</a> to which this patch is applied.
     * The Reference to the <a href="/../api/projects/products#productvariant">ProductVariant</a> with which the ProductVariantPatch is associated.
     * If referenced ProductVariant does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary ProductVariant is created.</p>
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
     * <p>Maps to <code>ProductVariant.attributes</code>.
     * The referenced attribute must be defined in an already existing <a href="/../api/projects/productTypes#producttype">ProductType</a> in the Project, or the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be <code>unresolved</code>.</p>
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
}
