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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductVariantKeyReference $productVariant = null,
        ?Attributes $attributes = null
    ) {
        $this->productVariant = $productVariant;
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
     * <p>Each attribute referenced must be defined
     * in an already existing product type in the commercetools project, or the import
     * operation state is set to <code>ValidationFailed</code>.</p>
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
}
