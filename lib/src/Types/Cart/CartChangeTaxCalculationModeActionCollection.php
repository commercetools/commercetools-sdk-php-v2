<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartChangeTaxCalculationModeActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartChangeTaxCalculationModeAction
     */
    public function at($index);

    /**
     * @return CartChangeTaxCalculationModeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartChangeTaxCalculationModeAction
     */
    public function map($data, $index);
}
