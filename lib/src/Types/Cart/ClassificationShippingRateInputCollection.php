<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\ShippingRateInputCollection;


interface ClassificationShippingRateInputCollection extends ShippingRateInputCollection
{
    /**
     * @param $index
     * @return ClassificationShippingRateInput
     */
    public function at($index);

    /**
     * @return ClassificationShippingRateInput
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ClassificationShippingRateInput
     */
    public function map($data, $index);
}
