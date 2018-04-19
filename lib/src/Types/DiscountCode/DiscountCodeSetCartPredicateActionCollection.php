<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollection;


interface DiscountCodeSetCartPredicateActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @param $index
     * @return DiscountCodeSetCartPredicateAction
     */
    public function at($index);

    /**
     * @return DiscountCodeSetCartPredicateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeSetCartPredicateAction
     */
    public function map($data, $index);
}
