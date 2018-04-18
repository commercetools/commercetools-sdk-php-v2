<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Base\Collection;

interface ShippingRateInputTypeCollection extends Collection {
    /**
     * @param $index
     * @return ShippingRateInputType
     */
    public function at($index);

    /**
     * @return ShippingRateInputType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingRateInputType
     */
    public function map($data, $index);
}
