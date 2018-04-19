<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollection;


interface DiscountCodeSetDescriptionActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @param $index
     * @return DiscountCodeSetDescriptionAction
     */
    public function at($index);

    /**
     * @return DiscountCodeSetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeSetDescriptionAction
     */
    public function map($data, $index);
}
