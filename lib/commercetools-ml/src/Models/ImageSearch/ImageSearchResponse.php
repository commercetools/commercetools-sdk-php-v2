<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImageSearchResponse extends JsonObject
{
    public const FIELD_COUNT = 'count';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_TOTAL = 'total';
    public const FIELD_RESULTS = 'results';

    /**
     * <p>The maximum number of results to return from a query.</p>
     *

     * @return null|int
     */
    public function getCount();

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|float
     */
    public function getOffset();

    /**
     * <p>The total number of product images that were have been analyzed.</p>
     *

     * @return null|int
     */
    public function getTotal();

    /**
     * <p>An array of image URLs of images that are similar to the query image. If no matching images are found, results is empty.</p>
     *

     * @return null|ResultItemCollection
     */
    public function getResults();

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;

    /**
     * @param ?float $offset
     */
    public function setOffset(?float $offset): void;

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;

    /**
     * @param ?ResultItemCollection $results
     */
    public function setResults(?ResultItemCollection $results): void;
}
