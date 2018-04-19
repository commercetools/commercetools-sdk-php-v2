<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollection;


interface DiscountCodeChangeGroupsActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @param $index
     * @return DiscountCodeChangeGroupsAction
     */
    public function at($index);

    /**
     * @return DiscountCodeChangeGroupsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeChangeGroupsAction
     */
    public function map($data, $index);
}
