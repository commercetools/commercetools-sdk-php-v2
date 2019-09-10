<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface FacetResultTerm extends JsonObject
{
    const FIELD_TERM = 'term';
    const FIELD_COUNT = 'count';
    const FIELD_PRODUCT_COUNT = 'productCount';

    /**
     * @return null|JsonObject
     */
    public function getTerm();

    /**
     * @return null|int
     */
    public function getCount();

    /**
     * @return null|int
     */
    public function getProductCount();

    public function setTerm(?JsonObject $term): void;

    public function setCount(?int $count): void;

    public function setProductCount(?int $productCount): void;
}
