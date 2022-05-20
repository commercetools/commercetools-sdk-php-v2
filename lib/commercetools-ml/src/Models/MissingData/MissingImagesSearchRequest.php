<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MissingImagesSearchRequest extends JsonObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_STAGED = 'staged';
    public const FIELD_PRODUCT_SET_LIMIT = 'productSetLimit';
    public const FIELD_INCLUDE_VARIANTS = 'includeVariants';
    public const FIELD_AUTO_THRESHOLD = 'autoThreshold';
    public const FIELD_THRESHOLD = 'threshold';
    public const FIELD_PRODUCT_IDS = 'productIds';
    public const FIELD_PRODUCT_TYPE_IDS = 'productTypeIds';

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *
     * @return null|int
     */
    public function getLimit();

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *
     * @return null|int
     */
    public function getOffset();

    /**
     * <p>If true, searches data from staged products in addition to published products.</p>
     *
     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Maximum number of products to scan.</p>
     *
     * @return null|int
     */
    public function getProductSetLimit();

    /**
     * <p>If true, searches all product variants. If false, only searches master variants.</p>
     *
     * @return null|bool
     */
    public function getIncludeVariants();

    /**
     * <p>If true, uses the median number of images per product variant as a threshold value.</p>
     *
     * @return null|bool
     */
    public function getAutoThreshold();

    /**
     * <p>The minimum number of images a product variant must have. Anything below this value is considered a product variant with missing images.</p>
     *
     * @return null|int
     */
    public function getThreshold();

    /**
     * <p>Filters results by the provided Product IDs. Cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductIds();

    /**
     * <p>Filters results by the provided product type IDs. It cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductTypeIds();

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?int $productSetLimit
     */
    public function setProductSetLimit(?int $productSetLimit): void;

    /**
     * @param ?bool $includeVariants
     */
    public function setIncludeVariants(?bool $includeVariants): void;

    /**
     * @param ?bool $autoThreshold
     */
    public function setAutoThreshold(?bool $autoThreshold): void;

    /**
     * @param ?int $threshold
     */
    public function setThreshold(?int $threshold): void;

    /**
     * @param ?array $productIds
     */
    public function setProductIds(?array $productIds): void;

    /**
     * @param ?array $productTypeIds
     */
    public function setProductTypeIds(?array $productTypeIds): void;
}
