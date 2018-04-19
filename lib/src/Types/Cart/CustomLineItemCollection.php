<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface CustomLineItemCollection extends Collection
{
    /**
     * @param $index
     * @return CustomLineItem
     */
    public function at($index);

    /**
     * @return CustomLineItem
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomLineItem
     */
    public function map($data, $index);
}
