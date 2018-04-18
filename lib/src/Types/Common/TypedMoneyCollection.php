<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types\Common\MoneyCollection;


interface TypedMoneyCollection extends MoneyCollection {
    /**
     * @param $index
     * @return TypedMoney
     */
    public function at($index);

    /**
     * @return TypedMoney
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypedMoney
     */
    public function map($data, $index);
}
