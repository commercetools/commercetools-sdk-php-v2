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
use stdClass;

/**
 * @internal
 */
final class MissingImagesSearchRequestModel extends JsonObjectModel implements MissingImagesSearchRequest
{
    /**
     * @var ?int
     */
    protected $limit;

    /**
     * @var ?int
     */
    protected $offset;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?int
     */
    protected $productSetLimit;

    /**
     * @var ?bool
     */
    protected $includeVariants;

    /**
     * @var ?bool
     */
    protected $autoThreshold;

    /**
     * @var ?int
     */
    protected $threshold;

    /**
     * @var ?array
     */
    protected $productIds;

    /**
     * @var ?array
     */
    protected $productTypeIds;


    public function __construct(
        int $limit = null,
        int $offset = null,
        bool $staged = null,
        int $productSetLimit = null,
        bool $includeVariants = null,
        bool $autoThreshold = null,
        int $threshold = null,
        array $productIds = null,
        array $productTypeIds = null
    ) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->staged = $staged;
        $this->productSetLimit = $productSetLimit;
        $this->includeVariants = $includeVariants;
        $this->autoThreshold = $autoThreshold;
        $this->threshold = $threshold;
        $this->productIds = $productIds;
        $this->productTypeIds = $productTypeIds;
    }

    /**
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingImagesSearchRequest::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (int) $data;
        }

        return $this->limit;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingImagesSearchRequest::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * <p>If true, searches data from staged products in addition to published products.</p>
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(MissingImagesSearchRequest::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>Maximum number of products to scan.</p>
     *
     * @return null|int
     */
    public function getProductSetLimit()
    {
        if (is_null($this->productSetLimit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingImagesSearchRequest::FIELD_PRODUCT_SET_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->productSetLimit = (int) $data;
        }

        return $this->productSetLimit;
    }

    /**
     * <p>If true, searches all product variants. If false, only searches master variants.</p>
     *
     * @return null|bool
     */
    public function getIncludeVariants()
    {
        if (is_null($this->includeVariants)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(MissingImagesSearchRequest::FIELD_INCLUDE_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->includeVariants = (bool) $data;
        }

        return $this->includeVariants;
    }

    /**
     * <p>If true, uses the median number of images per product variant as a threshold value.</p>
     *
     * @return null|bool
     */
    public function getAutoThreshold()
    {
        if (is_null($this->autoThreshold)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(MissingImagesSearchRequest::FIELD_AUTO_THRESHOLD);
            if (is_null($data)) {
                return null;
            }
            $this->autoThreshold = (bool) $data;
        }

        return $this->autoThreshold;
    }

    /**
     * <p>The minimum number of images a product variant must have. Anything below this value is considered a product variant with missing images.</p>
     *
     * @return null|int
     */
    public function getThreshold()
    {
        if (is_null($this->threshold)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingImagesSearchRequest::FIELD_THRESHOLD);
            if (is_null($data)) {
                return null;
            }
            $this->threshold = (int) $data;
        }

        return $this->threshold;
    }

    /**
     * <p>Filters results by the provided Product IDs. Cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductIds()
    {
        if (is_null($this->productIds)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(MissingImagesSearchRequest::FIELD_PRODUCT_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->productIds = $data;
        }

        return $this->productIds;
    }

    /**
     * <p>Filters results by the provided product type IDs. It cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductTypeIds()
    {
        if (is_null($this->productTypeIds)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(MissingImagesSearchRequest::FIELD_PRODUCT_TYPE_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->productTypeIds = $data;
        }

        return $this->productTypeIds;
    }

    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    public function setProductSetLimit(?int $productSetLimit): void
    {
        $this->productSetLimit = $productSetLimit;
    }

    public function setIncludeVariants(?bool $includeVariants): void
    {
        $this->includeVariants = $includeVariants;
    }

    public function setAutoThreshold(?bool $autoThreshold): void
    {
        $this->autoThreshold = $autoThreshold;
    }

    public function setThreshold(?int $threshold): void
    {
        $this->threshold = $threshold;
    }

    public function setProductIds(?array $productIds): void
    {
        $this->productIds = $productIds;
    }

    public function setProductTypeIds(?array $productTypeIds): void
    {
        $this->productTypeIds = $productTypeIds;
    }
}
