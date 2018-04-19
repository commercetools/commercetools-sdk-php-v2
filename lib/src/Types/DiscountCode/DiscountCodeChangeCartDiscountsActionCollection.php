<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollection;


interface DiscountCodeChangeCartDiscountsActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @param $index
     * @return DiscountCodeChangeCartDiscountsAction
     */
    public function at($index);

    /**
     * @return DiscountCodeChangeCartDiscountsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeChangeCartDiscountsAction
     */
    public function map($data, $index);
}
