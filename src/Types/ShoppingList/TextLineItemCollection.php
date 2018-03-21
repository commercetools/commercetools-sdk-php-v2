<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\Collection;

interface TextLineItemCollection extends Collection {
    /**
     * @param $index
     * @return TextLineItem
     */
    public function at($index);

    /**
     * @return TextLineItem
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TextLineItem
     */
    public function map($data, $index);
}
