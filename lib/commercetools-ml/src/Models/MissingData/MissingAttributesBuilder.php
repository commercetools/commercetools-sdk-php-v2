<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Ml\Models\Common\ProductReference;
use Commercetools\Ml\Models\Common\ProductReferenceBuilder;
use Commercetools\Ml\Models\Common\ProductTypeReference;
use Commercetools\Ml\Models\Common\ProductTypeReferenceBuilder;

/**
 * @implements Builder<MissingAttributes>
 */
final class MissingAttributesBuilder implements Builder
{
    /**
     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**
     * @var null|ProductTypeReference|ProductTypeReferenceBuilder
     */
    private $productType;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ?array
     */
    private $missingAttributeValues;

    /**
     * @var ?array
     */
    private $missingAttributeNames;

    /**
     * @var null|AttributeCount|AttributeCountBuilder
     */
    private $attributeCount;

    /**
     * @var null|AttributeCoverage|AttributeCoverageBuilder
     */
    private $attributeCoverage;

    /**
     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * @return null|ProductTypeReference
     */
    public function getProductType()
    {
        return $this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType;
    }

    /**
     * <p>ID of a ProductVariant.</p>
     *
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>The names of the attributes of the product type that the variant is missing, sorted by attribute importance in descending order.</p>
     *
     * @return null|array
     */
    public function getMissingAttributeValues()
    {
        return $this->missingAttributeValues;
    }

    /**
     * <p>The names of the attributes of the product type that the variant is missing, sorted by attribute importance in descending order.</p>
     *
     * @return null|array
     */
    public function getMissingAttributeNames()
    {
        return $this->missingAttributeNames;
    }

    /**
     * @return null|AttributeCount
     */
    public function getAttributeCount()
    {
        return $this->attributeCount instanceof AttributeCountBuilder ? $this->attributeCount->build() : $this->attributeCount;
    }

    /**
     * @return null|AttributeCoverage
     */
    public function getAttributeCoverage()
    {
        return $this->attributeCoverage instanceof AttributeCoverageBuilder ? $this->attributeCoverage->build() : $this->attributeCoverage;
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
    public function withProductType(?ProductTypeReference $productType)
    {
        $this->productType = $productType;

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
    public function withMissingAttributeValues(?array $missingAttributeValues)
    {
        $this->missingAttributeValues = $missingAttributeValues;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMissingAttributeNames(?array $missingAttributeNames)
    {
        $this->missingAttributeNames = $missingAttributeNames;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributeCount(?AttributeCount $attributeCount)
    {
        $this->attributeCount = $attributeCount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributeCoverage(?AttributeCoverage $attributeCoverage)
    {
        $this->attributeCoverage = $attributeCoverage;

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
    public function withProductTypeBuilder(?ProductTypeReferenceBuilder $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributeCountBuilder(?AttributeCountBuilder $attributeCount)
    {
        $this->attributeCount = $attributeCount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributeCoverageBuilder(?AttributeCoverageBuilder $attributeCoverage)
    {
        $this->attributeCoverage = $attributeCoverage;

        return $this;
    }

    public function build(): MissingAttributes
    {
        return new MissingAttributesModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType,
            $this->variantId,
            $this->missingAttributeValues,
            $this->missingAttributeNames,
            $this->attributeCount instanceof AttributeCountBuilder ? $this->attributeCount->build() : $this->attributeCount,
            $this->attributeCoverage instanceof AttributeCoverageBuilder ? $this->attributeCoverage->build() : $this->attributeCoverage
        );
    }

    public static function of(): MissingAttributesBuilder
    {
        return new self();
    }
}
