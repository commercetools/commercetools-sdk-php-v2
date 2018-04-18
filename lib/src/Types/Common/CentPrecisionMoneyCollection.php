<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types\Common\TypedMoneyCollection;


interface CentPrecisionMoneyCollection extends TypedMoneyCollection {
    /**
     * @param $index
     * @return CentPrecisionMoney
     */
    public function at($index);

    /**
     * @return CentPrecisionMoney
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CentPrecisionMoney
     */
    public function map($data, $index);
}
