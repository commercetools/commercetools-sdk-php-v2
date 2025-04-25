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
     * <p>The range's lower endpoint.</p>
     * <p><code>0</code> represents -∞.</p>
     *

     * @return null|float
     */
    public function getFrom();

    /**
     * <p>The range's lower endpoint.</p>
     * <p>An empty string represents -∞.</p>
     *

     * @return null|string
     */
    public function getFromStr();

    /**
     * <p>The range's upper endpoint.</p>
     * <p><code>0</code> represents +∞.</p>
     *

     * @return null|float
     */
    public function getTo();

    /**
     * <p>The range's upper endpoint.</p>
     * <p>An empty string represents +∞.</p>
     *

     * @return null|string
     */
    public function getToStr();

    /**
     * <p>Number of <a href="ctp:api:type:ProductVariant">ProductVariants</a> for which the values in a field fall into the specified range.</p>
     *

     * @return null|int
     */
    public function getCount();

    /**
     * <p>Number of <a href="ctp:api:type:Product">Products</a> for which the values in a field fall into the specified range.</p>
     * <p>Present only if the <code>counting products</code> <a href="/projects/product-projection-search#counting-products">extension</a> is enabled.</p>
     *

     * @return null|int
     */
    public function getProductCount();

    /**
     * <p>Sum of all values contained in the range.</p>
     *

     * @return null|float
     */
    public function getTotal();

    /**
     * <p>Minimum value within the range.</p>
     *

     * @return null|float
     */
    public function getMin();

    /**
     * <p>Maximum value within the range.</p>
     *

     * @return null|float
     */
    public function getMax();

    /**
     * <p>Arithmetic mean of the values within the range.</p>
     *

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
