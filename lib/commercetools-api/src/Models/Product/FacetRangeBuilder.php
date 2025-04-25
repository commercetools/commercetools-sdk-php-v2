<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<FacetRange>
 */
final class FacetRangeBuilder implements Builder
{
    /**

     * @var ?float
     */
    private $from;

    /**

     * @var ?string
     */
    private $fromStr;

    /**

     * @var ?float
     */
    private $to;

    /**

     * @var ?string
     */
    private $toStr;

    /**

     * @var ?int
     */
    private $count;

    /**

     * @var ?int
     */
    private $productCount;

    /**

     * @var ?float
     */
    private $total;

    /**

     * @var ?float
     */
    private $min;

    /**

     * @var ?float
     */
    private $max;

    /**

     * @var ?float
     */
    private $mean;

    /**
     * <p>The range's lower endpoint.</p>
     * <p><code>0</code> represents -∞.</p>
     *

     * @return null|float
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * <p>The range's lower endpoint.</p>
     * <p>An empty string represents -∞.</p>
     *

     * @return null|string
     */
    public function getFromStr()
    {
        return $this->fromStr;
    }

    /**
     * <p>The range's upper endpoint.</p>
     * <p><code>0</code> represents +∞.</p>
     *

     * @return null|float
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * <p>The range's upper endpoint.</p>
     * <p>An empty string represents +∞.</p>
     *

     * @return null|string
     */
    public function getToStr()
    {
        return $this->toStr;
    }

    /**
     * <p>Number of <a href="ctp:api:type:ProductVariant">ProductVariants</a> for which the values in a field fall into the specified range.</p>
     *

     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>Number of <a href="ctp:api:type:Product">Products</a> for which the values in a field fall into the specified range.</p>
     * <p>Present only if the <code>counting products</code> <a href="/projects/product-projection-search#counting-products">extension</a> is enabled.</p>
     *

     * @return null|int
     */
    public function getProductCount()
    {
        return $this->productCount;
    }

    /**
     * <p>Sum of all values contained in the range.</p>
     *

     * @return null|float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>Minimum value within the range.</p>
     *

     * @return null|float
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * <p>Maximum value within the range.</p>
     *

     * @return null|float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * <p>Arithmetic mean of the values within the range.</p>
     *

     * @return null|float
     */
    public function getMean()
    {
        return $this->mean;
    }

    /**
     * @param ?float $from
     * @return $this
     */
    public function withFrom(?float $from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @param ?string $fromStr
     * @return $this
     */
    public function withFromStr(?string $fromStr)
    {
        $this->fromStr = $fromStr;

        return $this;
    }

    /**
     * @param ?float $to
     * @return $this
     */
    public function withTo(?float $to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @param ?string $toStr
     * @return $this
     */
    public function withToStr(?string $toStr)
    {
        $this->toStr = $toStr;

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

    /**
     * @param ?int $productCount
     * @return $this
     */
    public function withProductCount(?int $productCount)
    {
        $this->productCount = $productCount;

        return $this;
    }

    /**
     * @param ?float $total
     * @return $this
     */
    public function withTotal(?float $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param ?float $min
     * @return $this
     */
    public function withMin(?float $min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @param ?float $max
     * @return $this
     */
    public function withMax(?float $max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @param ?float $mean
     * @return $this
     */
    public function withMean(?float $mean)
    {
        $this->mean = $mean;

        return $this;
    }


    public function build(): FacetRange
    {
        return new FacetRangeModel(
            $this->from,
            $this->fromStr,
            $this->to,
            $this->toStr,
            $this->count,
            $this->productCount,
            $this->total,
            $this->min,
            $this->max,
            $this->mean
        );
    }

    public static function of(): FacetRangeBuilder
    {
        return new self();
    }
}
