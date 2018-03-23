<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

interface FacetResultRange extends JsonObject {
    const FIELD_FROM = 'from';
    const FIELD_FROM_STR = 'fromStr';
    const FIELD_TO = 'to';
    const FIELD_TO_STR = 'toStr';
    const FIELD_COUNT = 'count';
    const FIELD_PRODUCT_COUNT = 'productCount';
    const FIELD_TOTAL = 'total';
    const FIELD_MIN = 'min';
    const FIELD_MAX = 'max';
    const FIELD_MEAN = 'mean';

    /**
     * @return int
     */
    public function getFrom();

    /**
     * @return string
     */
    public function getFromStr();

    /**
     * @return int
     */
    public function getTo();

    /**
     * @return string
     */
    public function getToStr();

    /**
     * @return int
     */
    public function getCount();

    /**
     * @return int
     */
    public function getProductCount();

    /**
     * @return int
     */
    public function getTotal();

    /**
     * @return int
     */
    public function getMin();

    /**
     * @return int
     */
    public function getMax();

    /**
     * @return int
     */
    public function getMean();

    /**
     * @param int $from
     * @return $this
     */
    public function setFrom(int $from);

    /**
     * @param string $fromStr
     * @return $this
     */
    public function setFromStr(string $fromStr);

    /**
     * @param int $to
     * @return $this
     */
    public function setTo(int $to);

    /**
     * @param string $toStr
     * @return $this
     */
    public function setToStr(string $toStr);

    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count);

    /**
     * @param int $productCount
     * @return $this
     */
    public function setProductCount(int $productCount);

    /**
     * @param int $total
     * @return $this
     */
    public function setTotal(int $total);

    /**
     * @param int $min
     * @return $this
     */
    public function setMin(int $min);

    /**
     * @param int $max
     * @return $this
     */
    public function setMax(int $max);

    /**
     * @param int $mean
     * @return $this
     */
    public function setMean(int $mean);

}
