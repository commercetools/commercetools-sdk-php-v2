<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface FacetResultRange extends JsonObject
{
    
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
     *
     * @return int|null
     */
    public function getFrom();
    
    /**
     *
     * @return string|null
     */
    public function getFromStr();
    
    /**
     *
     * @return int|null
     */
    public function getTo();
    
    /**
     *
     * @return string|null
     */
    public function getToStr();
    
    /**
     *
     * @return int|null
     */
    public function getCount();
    
    /**
     *
     * @return int|null
     */
    public function getProductCount();
    
    /**
     *
     * @return int|null
     */
    public function getTotal();
    
    /**
     *
     * @return int|null
     */
    public function getMin();
    
    /**
     *
     * @return int|null
     */
    public function getMax();
    
    /**
     *
     * @return int|null
     */
    public function getMean();
    public function setFrom(?int $from): void;
    
    public function setFromStr(?string $fromStr): void;
    
    public function setTo(?int $to): void;
    
    public function setToStr(?string $toStr): void;
    
    public function setCount(?int $count): void;
    
    public function setProductCount(?int $productCount): void;
    
    public function setTotal(?int $total): void;
    
    public function setMin(?int $min): void;
    
    public function setMax(?int $max): void;
    
    public function setMean(?int $mean): void;
}