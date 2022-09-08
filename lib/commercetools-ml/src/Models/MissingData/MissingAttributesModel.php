<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Ml\Models\Common\ProductReference;
use Commercetools\Ml\Models\Common\ProductReferenceModel;
use Commercetools\Ml\Models\Common\ProductTypeReference;
use Commercetools\Ml\Models\Common\ProductTypeReferenceModel;
use stdClass;

/**
 * @internal
 */
final class MissingAttributesModel extends JsonObjectModel implements MissingAttributes
{
    /**
     *
     * @var ?ProductReference
     */
    protected $product;

    /**
     *
     * @var ?ProductTypeReference
     */
    protected $productType;

    /**
     *
     * @var ?int
     */
    protected $variantId;

    /**
     *
     * @var ?array
     */
    protected $missingAttributeValues;

    /**
     *
     * @var ?array
     */
    protected $missingAttributeNames;

    /**
     * @deprecated
     * @var ?AttributeCount
     */
    protected $attributeCount;

    /**
     * @deprecated
     * @var ?AttributeCoverage
     */
    protected $attributeCoverage;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductReference $product = null,
        ?ProductTypeReference $productType = null,
        ?int $variantId = null,
        ?array $missingAttributeValues = null,
        ?array $missingAttributeNames = null,
        ?AttributeCount $attributeCount = null,
        ?AttributeCoverage $attributeCoverage = null
    ) {
        $this->product = $product;
        $this->productType = $productType;
        $this->variantId = $variantId;
        $this->missingAttributeValues = $missingAttributeValues;
        $this->missingAttributeNames = $missingAttributeNames;
        $this->attributeCount = $attributeCount;
        $this->attributeCoverage = $attributeCoverage;
    }

    /**
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
     *
     * @return null|ProductTypeReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->productType = ProductTypeReferenceModel::of($data);
        }

        return $this->productType;
    }

    /**
     * <p>ID of a ProductVariant.</p>
     *
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
     * <p>The names of the attributes of the product type that the variant is missing, sorted by attribute importance in descending order.</p>
     *
     *
     * @return null|array
     */
    public function getMissingAttributeValues()
    {
        if (is_null($this->missingAttributeValues)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_MISSING_ATTRIBUTE_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->missingAttributeValues = $data;
        }

        return $this->missingAttributeValues;
    }

    /**
     * <p>The names of the attributes of the product type that the variant is missing, sorted by attribute importance in descending order.</p>
     *
     *
     * @return null|array
     */
    public function getMissingAttributeNames()
    {
        if (is_null($this->missingAttributeNames)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_MISSING_ATTRIBUTE_NAMES);
            if (is_null($data)) {
                return null;
            }
            $this->missingAttributeNames = $data;
        }

        return $this->missingAttributeNames;
    }

    /**
     * @deprecated
     * @return null|AttributeCount
     */
    public function getAttributeCount()
    {
        if (is_null($this->attributeCount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE_COUNT);
            if (is_null($data)) {
                return null;
            }

            $this->attributeCount = AttributeCountModel::of($data);
        }

        return $this->attributeCount;
    }

    /**
     * @deprecated
     * @return null|AttributeCoverage
     */
    public function getAttributeCoverage()
    {
        if (is_null($this->attributeCoverage)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE_COVERAGE);
            if (is_null($data)) {
                return null;
            }

            $this->attributeCoverage = AttributeCoverageModel::of($data);
        }

        return $this->attributeCoverage;
    }


    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?ProductTypeReference $productType
     */
    public function setProductType(?ProductTypeReference $productType): void
    {
        $this->productType = $productType;
    }

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?array $missingAttributeValues
     */
    public function setMissingAttributeValues(?array $missingAttributeValues): void
    {
        $this->missingAttributeValues = $missingAttributeValues;
    }

    /**
     * @param ?array $missingAttributeNames
     */
    public function setMissingAttributeNames(?array $missingAttributeNames): void
    {
        $this->missingAttributeNames = $missingAttributeNames;
    }

    /**
     * @param ?AttributeCount $attributeCount
     */
    public function setAttributeCount(?AttributeCount $attributeCount): void
    {
        $this->attributeCount = $attributeCount;
    }

    /**
     * @param ?AttributeCoverage $attributeCoverage
     */
    public function setAttributeCoverage(?AttributeCoverage $attributeCoverage): void
    {
        $this->attributeCoverage = $attributeCoverage;
    }
}
