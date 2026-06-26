<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantAttributes>
 */
final class VariantAttributesBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $productId;

    /**

     * @var ?string
     */
    private $productKey;

    /**

     * @var ?VariantAttributesAttributeMetadataCollection
     */
    private $attributes;

    /**

     * @var ?VariantAttributesVariantCollection
     */
    private $variants;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getProductKey()
    {
        return $this->productKey;
    }

    /**
     * <p>Metadata for the requested Attributes, derived from the <a href="ctp:api:type:ProductType">ProductType</a>.
     * Attributes not found in the ProductType are silently omitted.</p>
     *

     * @return null|VariantAttributesAttributeMetadataCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <p>All Variants of the Product with their requested Attributes and availability.</p>
     *

     * @return null|VariantAttributesVariantCollection
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @param ?string $productId
     * @return $this
     */
    public function withProductId(?string $productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @param ?string $productKey
     * @return $this
     */
    public function withProductKey(?string $productKey)
    {
        $this->productKey = $productKey;

        return $this;
    }

    /**
     * @param ?VariantAttributesAttributeMetadataCollection $attributes
     * @return $this
     */
    public function withAttributes(?VariantAttributesAttributeMetadataCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @param ?VariantAttributesVariantCollection $variants
     * @return $this
     */
    public function withVariants(?VariantAttributesVariantCollection $variants)
    {
        $this->variants = $variants;

        return $this;
    }


    public function build(): VariantAttributes
    {
        return new VariantAttributesModel(
            $this->productId,
            $this->productKey,
            $this->attributes,
            $this->variants
        );
    }

    public static function of(): VariantAttributesBuilder
    {
        return new self();
    }
}
