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
 * @implements Builder<MissingImagesSearchRequest>
 */
final class MissingImagesSearchRequestBuilder implements Builder
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
     * @var ?bool
     */
    private $autoThreshold;

    /**
     * @var ?int
     */
    private $threshold;

    /**
     * @var ?array
     */
    private $productIds;

    /**
     * @var ?array
     */
    private $productTypeIds;

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
     * <p>If true, uses the median number of images per product variant as a threshold value.</p>
     *
     * @return null|bool
     */
    public function getAutoThreshold()
    {
        return $this->autoThreshold;
    }

    /**
     * <p>The minimum number of images a product variant must have. Anything below this value is considered a product variant with missing images.</p>
     *
     * @return null|int
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * <p>Filters results by the provided Product IDs. Cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductIds()
    {
        return $this->productIds;
    }

    /**
     * <p>Filters results by the provided product type IDs. It cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductTypeIds()
    {
        return $this->productTypeIds;
    }

    /**
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?int $productSetLimit
     * @return $this
     */
    public function withProductSetLimit(?int $productSetLimit)
    {
        $this->productSetLimit = $productSetLimit;

        return $this;
    }

    /**
     * @param ?bool $includeVariants
     * @return $this
     */
    public function withIncludeVariants(?bool $includeVariants)
    {
        $this->includeVariants = $includeVariants;

        return $this;
    }

    /**
     * @param ?bool $autoThreshold
     * @return $this
     */
    public function withAutoThreshold(?bool $autoThreshold)
    {
        $this->autoThreshold = $autoThreshold;

        return $this;
    }

    /**
     * @param ?int $threshold
     * @return $this
     */
    public function withThreshold(?int $threshold)
    {
        $this->threshold = $threshold;

        return $this;
    }

    /**
     * @param ?array $productIds
     * @return $this
     */
    public function withProductIds(?array $productIds)
    {
        $this->productIds = $productIds;

        return $this;
    }

    /**
     * @param ?array $productTypeIds
     * @return $this
     */
    public function withProductTypeIds(?array $productTypeIds)
    {
        $this->productTypeIds = $productTypeIds;

        return $this;
    }


    public function build(): MissingImagesSearchRequest
    {
        return new MissingImagesSearchRequestModel(
            $this->limit,
            $this->offset,
            $this->staged,
            $this->productSetLimit,
            $this->includeVariants,
            $this->autoThreshold,
            $this->threshold,
            $this->productIds,
            $this->productTypeIds
        );
    }

    public static function of(): MissingImagesSearchRequestBuilder
    {
        return new self();
    }
}
