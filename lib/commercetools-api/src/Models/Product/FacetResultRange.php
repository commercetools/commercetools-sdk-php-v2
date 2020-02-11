<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface FacetResultRange extends JsonObject
{

    public const FIELD_FROM = 'from';
    public const FIELD_FROM_STR = 'fromStr';
    public const FIELD_TO = 'to';
    public const FIELD_TO_STR = 'toStr';
    public const FIELD_COUNT = 'count';
    public const FIELD_PRODUCT_COUNT = 'productCount';
    public const FIELD_TOTAL = 'total';
    public const FIELD_MIN = 'min';
    public const FIELD_MAX = 'max';
    public const FIELD_MEAN = 'mean';

    /**
     * @return null|int
     */
    public function getFrom();

    /**
     * @return null|string
     */
    public function getFromStr();

    /**
     * @return null|int
     */
    public function getTo();

    /**
     * @return null|string
     */
    public function getToStr();

    /**
     * @return null|int
     */
    public function getCount();

    /**
     * @return null|int
     */
    public function getProductCount();

    /**
     * @return null|int
     */
    public function getTotal();

    /**
     * @return null|int
     */
    public function getMin();

    /**
     * @return null|int
     */
    public function getMax();

    /**
     * @return null|int
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
