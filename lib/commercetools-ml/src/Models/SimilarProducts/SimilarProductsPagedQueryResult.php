<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SimilarProductsPagedQueryResult extends JsonObject
{
    public const FIELD_COUNT = 'count';
    public const FIELD_TOTAL = 'total';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_RESULTS = 'results';
    public const FIELD_META = 'meta';

    /**

     * @return null|int
     */
    public function getCount();

    /**

     * @return null|int
     */
    public function getTotal();

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|int
     */
    public function getOffset();

    /**

     * @return null|SimilarProductPairCollection
     */
    public function getResults();

    /**

     * @return null|SimilarProductSearchRequestMeta
     */
    public function getMeta();

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?SimilarProductPairCollection $results
     */
    public function setResults(?SimilarProductPairCollection $results): void;

    /**
     * @param ?SimilarProductSearchRequestMeta $meta
     */
    public function setMeta(?SimilarProductSearchRequestMeta $meta): void;
}
