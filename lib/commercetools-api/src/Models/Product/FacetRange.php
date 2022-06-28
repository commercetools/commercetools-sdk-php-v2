<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface FacetRange extends JsonObject
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
     * @return null|float
     */
    public function getFrom();

    /**
     * @return null|string
     */
    public function getFromStr();

    /**
     * @return null|float
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
     * @return null|float
     */
    public function getTotal();

    /**
     * @return null|float
     */
    public function getMin();

    /**
     * @return null|float
     */
    public function getMax();

    /**
     * @return null|float
     */
    public function getMean();

    /**
     * @param ?float $from
     */
    public function setFrom(?float $from): void;

    /**
     * @param ?string $fromStr
     */
    public function setFromStr(?string $fromStr): void;

    /**
     * @param ?float $to
     */
    public function setTo(?float $to): void;

    /**
     * @param ?string $toStr
     */
    public function setToStr(?string $toStr): void;

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;

    /**
     * @param ?int $productCount
     */
    public function setProductCount(?int $productCount): void;

    /**
     * @param ?float $total
     */
    public function setTotal(?float $total): void;

    /**
     * @param ?float $min
     */
    public function setMin(?float $min): void;

    /**
     * @param ?float $max
     */
    public function setMax(?float $max): void;

    /**
     * @param ?float $mean
     */
    public function setMean(?float $mean): void;
}
