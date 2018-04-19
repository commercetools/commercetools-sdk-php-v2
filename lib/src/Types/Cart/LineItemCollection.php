<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface LineItemCollection extends Collection
{
    /**
     * @param $index
     * @return LineItem
     */
    public function at($index);

    /**
     * @return LineItem
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return LineItem
     */
    public function map($data, $index);
}
