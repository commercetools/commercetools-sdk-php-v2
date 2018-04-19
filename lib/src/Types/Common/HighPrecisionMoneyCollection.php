<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types\Common\TypedMoneyCollection;


interface HighPrecisionMoneyCollection extends TypedMoneyCollection
{
    /**
     * @param $index
     * @return HighPrecisionMoney
     */
    public function at($index);

    /**
     * @return HighPrecisionMoney
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return HighPrecisionMoney
     */
    public function map($data, $index);
}
