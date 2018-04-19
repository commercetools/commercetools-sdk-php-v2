<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartChangeTaxRoundingModeActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartChangeTaxRoundingModeAction
     */
    public function at($index);

    /**
     * @return CartChangeTaxRoundingModeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartChangeTaxRoundingModeAction
     */
    public function map($data, $index);
}
