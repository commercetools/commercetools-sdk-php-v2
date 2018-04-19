<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\ShippingRateInputCollection;


interface ScoreShippingRateInputCollection extends ShippingRateInputCollection
{
    /**
     * @param $index
     * @return ScoreShippingRateInput
     */
    public function at($index);

    /**
     * @return ScoreShippingRateInput
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ScoreShippingRateInput
     */
    public function map($data, $index);
}
