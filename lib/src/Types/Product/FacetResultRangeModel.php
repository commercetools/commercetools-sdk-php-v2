<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class FacetResultRangeModel extends JsonObjectModel implements FacetResultRange {
    /**
     * @var int
     */
    protected $from;
    /**
     * @var string
     */
    protected $fromStr;
    /**
     * @var int
     */
    protected $to;
    /**
     * @var string
     */
    protected $toStr;
    /**
     * @var int
     */
    protected $count;
    /**
     * @var int
     */
    protected $productCount;
    /**
     * @var int
     */
    protected $total;
    /**
     * @var int
     */
    protected $min;
    /**
     * @var int
     */
    protected $max;
    /**
     * @var int
     */
    protected $mean;

    /**
     * @return int
     */
    public function getFrom()
    {
        if (is_null($this->from)) {
            $value = $this->raw(FacetResultRange::FIELD_FROM);
            $value = (int)$value;
            $this->from = $value;
        }
        return $this->from;
    }
    /**
     * @return string
     */
    public function getFromStr()
    {
        if (is_null($this->fromStr)) {
            $value = $this->raw(FacetResultRange::FIELD_FROM_STR);
            $value = (string)$value;
            $this->fromStr = $value;
        }
        return $this->fromStr;
    }
    /**
     * @return int
     */
    public function getTo()
    {
        if (is_null($this->to)) {
            $value = $this->raw(FacetResultRange::FIELD_TO);
            $value = (int)$value;
            $this->to = $value;
        }
        return $this->to;
    }
    /**
     * @return string
     */
    public function getToStr()
    {
        if (is_null($this->toStr)) {
            $value = $this->raw(FacetResultRange::FIELD_TO_STR);
            $value = (string)$value;
            $this->toStr = $value;
        }
        return $this->toStr;
    }
    /**
     * @return int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            $value = $this->raw(FacetResultRange::FIELD_COUNT);
            $value = (int)$value;
            $this->count = $value;
        }
        return $this->count;
    }
    /**
     * @return int
     */
    public function getProductCount()
    {
        if (is_null($this->productCount)) {
            $value = $this->raw(FacetResultRange::FIELD_PRODUCT_COUNT);
            $value = (int)$value;
            $this->productCount = $value;
        }
        return $this->productCount;
    }
    /**
     * @return int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            $value = $this->raw(FacetResultRange::FIELD_TOTAL);
            $value = (int)$value;
            $this->total = $value;
        }
        return $this->total;
    }
    /**
     * @return int
     */
    public function getMin()
    {
        if (is_null($this->min)) {
            $value = $this->raw(FacetResultRange::FIELD_MIN);
            $value = (int)$value;
            $this->min = $value;
        }
        return $this->min;
    }
    /**
     * @return int
     */
    public function getMax()
    {
        if (is_null($this->max)) {
            $value = $this->raw(FacetResultRange::FIELD_MAX);
            $value = (int)$value;
            $this->max = $value;
        }
        return $this->max;
    }
    /**
     * @return int
     */
    public function getMean()
    {
        if (is_null($this->mean)) {
            $value = $this->raw(FacetResultRange::FIELD_MEAN);
            $value = (int)$value;
            $this->mean = $value;
        }
        return $this->mean;
    }

    /**
     * @param int $from
     * @return $this
     */
    public function setFrom(int $from)
    {
        $this->from = (int)$from;

        return $this;
    }
    /**
     * @param string $fromStr
     * @return $this
     */
    public function setFromStr(string $fromStr)
    {
        $this->fromStr = (string)$fromStr;

        return $this;
    }
    /**
     * @param int $to
     * @return $this
     */
    public function setTo(int $to)
    {
        $this->to = (int)$to;

        return $this;
    }
    /**
     * @param string $toStr
     * @return $this
     */
    public function setToStr(string $toStr)
    {
        $this->toStr = (string)$toStr;

        return $this;
    }
    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count)
    {
        $this->count = (int)$count;

        return $this;
    }
    /**
     * @param int $productCount
     * @return $this
     */
    public function setProductCount(int $productCount)
    {
        $this->productCount = (int)$productCount;

        return $this;
    }
    /**
     * @param int $total
     * @return $this
     */
    public function setTotal(int $total)
    {
        $this->total = (int)$total;

        return $this;
    }
    /**
     * @param int $min
     * @return $this
     */
    public function setMin(int $min)
    {
        $this->min = (int)$min;

        return $this;
    }
    /**
     * @param int $max
     * @return $this
     */
    public function setMax(int $max)
    {
        $this->max = (int)$max;

        return $this;
    }
    /**
     * @param int $mean
     * @return $this
     */
    public function setMean(int $mean)
    {
        $this->mean = (int)$mean;

        return $this;
    }

}
