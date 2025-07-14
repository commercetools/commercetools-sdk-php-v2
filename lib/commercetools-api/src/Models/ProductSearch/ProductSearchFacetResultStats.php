<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetResultStats extends ProductSearchFacetResult
{
    public const FIELD_MIN = 'min';
    public const FIELD_MAX = 'max';
    public const FIELD_MEAN = 'mean';
    public const FIELD_SUM = 'sum';
    public const FIELD_COUNT = 'count';

    /**
     * <p>The minimum value of the field, scoped to the faceted results.</p>
     *

     * @return null|mixed
     */
    public function getMin();

    /**
     * <p>The maximum value of the field, scoped to the faceted results.</p>
     *

     * @return null|mixed
     */
    public function getMax();

    /**
     * <p>The average value of the field calculated as <code>sum</code> / <code>count</code>.</p>
     * <p>Only returned for number fields.</p>
     *

     * @return null|mixed
     */
    public function getMean();

    /**
     * <p>The sum of values of the field that match the <a href="ctp:api:type:ProductSearchFacetStatsExpression">facet expression</a>.</p>
     * <p>Only returned for number fields.</p>
     *

     * @return null|mixed
     */
    public function getSum();

    /**
     * <p>The total number of values counted that match the facet expression.</p>
     *

     * @return null|int
     */
    public function getCount();

    /**
     * @param mixed $min
     */
    public function setMin($min): void;

    /**
     * @param mixed $max
     */
    public function setMax($max): void;

    /**
     * @param mixed $mean
     */
    public function setMean($mean): void;

    /**
     * @param mixed $sum
     */
    public function setSum($sum): void;

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;
}
