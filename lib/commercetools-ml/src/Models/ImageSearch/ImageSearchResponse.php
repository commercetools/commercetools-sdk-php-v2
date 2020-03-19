<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearch;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

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
     * <p>The offset into the results matching the query. An offset of 0 is the default value indicating that no results should be skipped.</p>
     *
     * @return null|int
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

    public function setCount(?int $count): void;

    public function setOffset(?int $offset): void;

    public function setTotal(?int $total): void;

    public function setResults(?ResultItemCollection $results): void;
}
