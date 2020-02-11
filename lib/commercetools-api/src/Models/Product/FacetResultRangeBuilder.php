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
 * @implements Builder<FacetResultRange>
 */
final class FacetResultRangeBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $from;

    /**
     * @var ?string
     */
    private $fromStr;

    /**
     * @var ?int
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
     * @var ?int
     */
    private $total;

    /**
     * @var ?int
     */
    private $min;

    /**
     * @var ?int
     */
    private $max;

    /**
     * @var ?int
     */
    private $mean;

    /**
     * @return null|int
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return null|string
     */
    public function getFromStr()
    {
        return $this->fromStr;
    }

    /**
     * @return null|int
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @return null|string
     */
    public function getToStr()
    {
        return $this->toStr;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return null|int
     */
    public function getProductCount()
    {
        return $this->productCount;
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return null|int
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @return null|int
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @return null|int
     */
    public function getMean()
    {
        return $this->mean;
    }

    /**
     * @return $this
     */
    public function withFrom(?int $from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFromStr(?string $fromStr)
    {
        $this->fromStr = $fromStr;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTo(?int $to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @return $this
     */
    public function withToStr(?string $toStr)
    {
        $this->toStr = $toStr;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductCount(?int $productCount)
    {
        $this->productCount = $productCount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMin(?int $min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMax(?int $max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMean(?int $mean)
    {
        $this->mean = $mean;

        return $this;
    }


    public function build(): FacetResultRange
    {
        return new FacetResultRangeModel(
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

    public static function of(): FacetResultRangeBuilder
    {
        return new self();
    }
}
