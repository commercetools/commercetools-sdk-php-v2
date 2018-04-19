<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ShippingRateInputTypeCollection;


interface CartValueTypeCollection extends ShippingRateInputTypeCollection
{
    /**
     * @param $index
     * @return CartValueType
     */
    public function at($index);

    /**
     * @return CartValueType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartValueType
     */
    public function map($data, $index);
}
