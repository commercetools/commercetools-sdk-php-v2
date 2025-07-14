<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchFacetResultStats>
 */
final class ProductSearchFacetResultStatsBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var null|mixed|mixed
     */
    private $min;

    /**

     * @var null|mixed|mixed
     */
    private $max;

    /**

     * @var null|mixed|mixed
     */
    private $mean;

    /**

     * @var null|mixed|mixed
     */
    private $sum;

    /**

     * @var ?int
     */
    private $count;

    /**
     * <p>Name of the facet.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>The minimum value of the field, scoped to the faceted results.</p>
     *

     * @return null|mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * <p>The maximum value of the field, scoped to the faceted results.</p>
     *

     * @return null|mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * <p>The average value of the field calculated as <code>sum</code> / <code>count</code>.</p>
     * <p>Only returned for number fields.</p>
     *

     * @return null|mixed
     */
    public function getMean()
    {
        return $this->mean;
    }

    /**
     * <p>The sum of values of the field that match the <a href="ctp:api:type:ProductSearchFacetStatsExpression">facet expression</a>.</p>
     * <p>Only returned for number fields.</p>
     *

     * @return null|mixed
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * <p>The total number of values counted that match the facet expression.</p>
     *

     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $min
     * @return $this
     */
    public function withMin($min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @param mixed $max
     * @return $this
     */
    public function withMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @param mixed $mean
     * @return $this
     */
    public function withMean($mean)
    {
        $this->mean = $mean;

        return $this;
    }

    /**
     * @param mixed $sum
     * @return $this
     */
    public function withSum($sum)
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }


    public function build(): ProductSearchFacetResultStats
    {
        return new ProductSearchFacetResultStatsModel(
            $this->name,
            $this->min,
            $this->max,
            $this->mean,
            $this->sum,
            $this->count
        );
    }

    public static function of(): ProductSearchFacetResultStatsBuilder
    {
        return new self();
    }
}
