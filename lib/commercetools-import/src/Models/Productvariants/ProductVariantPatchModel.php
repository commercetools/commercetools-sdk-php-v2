<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportReferenceModel;
use stdClass;

final class ProductVariantPatchModel extends JsonObjectModel implements ProductVariantPatch
{
    /**
     * @var ?ImportReference
     */
    protected $productVariant;

    /**
     * @var ?Attributes
     */
    protected $attributes;

    public function __construct(
        ImportReference $productVariant = null,
        Attributes $attributes = null
    ) {
        $this->productVariant = $productVariant;
        $this->attributes = $attributes;
    }

    /**
     * <p>The product variant to which this patch is applied.</p>.
     *
     * @return null|ImportReference
     */
    public function getProductVariant()
    {
        if (is_null($this->productVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductVariantPatch::FIELD_PRODUCT_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->productVariant = ImportReferenceModel::of($data);
        }

        return $this->productVariant;
    }

    /**
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

    public function setProductVariant(?ImportReference $productVariant): void
    {
        $this->productVariant = $productVariant;
    }

    public function setAttributes(?Attributes $attributes): void
    {
        $this->attributes = $attributes;
    }
}
