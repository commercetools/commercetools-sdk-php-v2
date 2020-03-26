<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Ml\Models\Common\ProductReference;
use Commercetools\Ml\Models\Common\ProductReferenceBuilder;
use stdClass;

/**
 * @implements Builder<SimilarProduct>
 */
final class SimilarProductBuilder implements Builder
{
    /**
     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var null|SimilarProductMeta|SimilarProductMetaBuilder
     */
    private $meta;

    /**
     * <p>Reference to Product</p>
     *
     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>ID of the ProductVariant that was compared.</p>
     *
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>Supplementary information about the data used for similarity estimation. This information helps you understand the estimated confidence score, but it should not be used to identify a product.</p>
     *
     * @return null|SimilarProductMeta
     */
    public function getMeta()
    {
        return $this->meta instanceof SimilarProductMetaBuilder ? $this->meta->build() : $this->meta;
    }

    /**
     * @return $this
     */
    public function withProduct(?ProductReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMeta(?SimilarProductMeta $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductBuilder(?ProductReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaBuilder(?SimilarProductMetaBuilder $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    public function build(): SimilarProduct
    {
        return new SimilarProductModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->variantId,
            $this->meta instanceof SimilarProductMetaBuilder ? $this->meta->build() : $this->meta
        );
    }

    public static function of(): SimilarProductBuilder
    {
        return new self();
    }
}
