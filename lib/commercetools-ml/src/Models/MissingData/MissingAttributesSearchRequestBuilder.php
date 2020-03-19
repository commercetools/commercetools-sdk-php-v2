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

/**
 * @implements Builder<MissingAttributesSearchRequest>
 */
final class MissingAttributesSearchRequestBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $limit;

    /**
     * @var ?int
     */
    private $offset;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var ?int
     */
    private $productSetLimit;

    /**
     * @var ?bool
     */
    private $includeVariants;

    /**
     * @var ?int
     */
    private $coverageMin;

    /**
     * @var ?int
     */
    private $coverageMax;

    /**
     * @var ?string
     */
    private $sortBy;

    /**
     * @var ?bool
     */
    private $showMissingAttributeNames;

    /**
     * @var ?array
     */
    private $productIds;

    /**
     * @var ?array
     */
    private $productTypeIds;

    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>If true, searches data from staged products in addition to published products.</p>
     *
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>Maximum number of products to scan.</p>
     *
     * @return null|int
     */
    public function getProductSetLimit()
    {
        return $this->productSetLimit;
    }

    /**
     * <p>If true, searches all product variants. If false, only searches master variants.</p>
     *
     * @return null|bool
     */
    public function getIncludeVariants()
    {
        return $this->includeVariants;
    }

    /**
     * <p>Minimum attribute coverage of variants to display, applied to both coverage types.</p>
     *
     * @return null|int
     */
    public function getCoverageMin()
    {
        return $this->coverageMin;
    }

    /**
     * <p>Maximum attribute coverage of variants to display, applied to both coverage types.</p>
     *
     * @return null|int
     */
    public function getCoverageMax()
    {
        return $this->coverageMax;
    }

    /**
     * <p>Default value: <code>coverageAttributeValues</code> - Allowed values: [<code>coverageAttributeValues</code>, <code>coverageAttributeNames</code>]
     * <code>coverageAttributeValues</code> shows the product variants with the most missing attribute values first and <code>coverageAttributeNames</code> the ones with the most missing attribute names.</p>
     *
     * @return null|string
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }

    /**
     * <p>If true, the <code>missingAttributeNames</code> will be included in the results.</p>
     *
     * @return null|bool
     */
    public function getShowMissingAttributeNames()
    {
        return $this->showMissingAttributeNames;
    }

    /**
     * <p>Filters results by the provided Product IDs.
     * Cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductIds()
    {
        return $this->productIds;
    }

    /**
     * <p>Filters results by the provided product type IDs.
     * Cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductTypeIds()
    {
        return $this->productTypeIds;
    }

    /**
     * <p>Filters results by the provided attribute name. If provided,  products are only checked for this attribute. Therefore, only products of product types which define the attribute name are considered. These product type IDs
     * are then listed in <code>MissingAttributesMeta</code>. The  <code>attributeCount</code> and <code>attributeCoverage</code> fields are not part of the response when using this filter. Cannot be applied in combination with any other filter.</p>
     *
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductSetLimit(?int $productSetLimit)
    {
        $this->productSetLimit = $productSetLimit;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIncludeVariants(?bool $includeVariants)
    {
        $this->includeVariants = $includeVariants;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCoverageMin(?int $coverageMin)
    {
        $this->coverageMin = $coverageMin;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCoverageMax(?int $coverageMax)
    {
        $this->coverageMax = $coverageMax;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSortBy(?string $sortBy)
    {
        $this->sortBy = $sortBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShowMissingAttributeNames(?bool $showMissingAttributeNames)
    {
        $this->showMissingAttributeNames = $showMissingAttributeNames;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductIds(?array $productIds)
    {
        $this->productIds = $productIds;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductTypeIds(?array $productTypeIds)
    {
        $this->productTypeIds = $productTypeIds;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }


    public function build(): MissingAttributesSearchRequest
    {
        return new MissingAttributesSearchRequestModel(
            $this->limit,
            $this->offset,
            $this->staged,
            $this->productSetLimit,
            $this->includeVariants,
            $this->coverageMin,
            $this->coverageMax,
            $this->sortBy,
            $this->showMissingAttributeNames,
            $this->productIds,
            $this->productTypeIds,
            $this->attributeName
        );
    }

    public static function of(): MissingAttributesSearchRequestBuilder
    {
        return new self();
    }
}
