<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Ml\Models\Common\ProductReference;
use Commercetools\Ml\Models\Common\ProductReferenceModel;
use stdClass;

/**
 * @internal
 */
final class SimilarProductModel extends JsonObjectModel implements SimilarProduct
{
    /**

     * @var ?ProductReference
     */
    protected $product;

    /**

     * @var ?int
     */
    protected $variantId;

    /**

     * @var ?SimilarProductMeta
     */
    protected $meta;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductReference $product = null,
        ?int $variantId = null,
        ?SimilarProductMeta $meta = null
    ) {
        $this->product = $product;
        $this->variantId = $variantId;
        $this->meta = $meta;
    }

    /**
     * <p>Reference to Product</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>ID of the ProductVariant that was compared.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * <p>Supplementary information about the data used for similarity estimation. This information helps you understand the estimated confidence score, but it should not be used to identify a product.</p>
     *

     * @return null|SimilarProductMeta
     */
    public function getMeta()
    {
        if (is_null($this->meta)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META);
            if (is_null($data)) {
                return null;
            }

            $this->meta = SimilarProductMetaModel::of($data);
        }

        return $this->meta;
    }


    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?SimilarProductMeta $meta
     */
    public function setMeta(?SimilarProductMeta $meta): void
    {
        $this->meta = $meta;
    }
}
