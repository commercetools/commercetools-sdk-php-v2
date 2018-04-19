<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\Collection;

interface ShippingRateDraftCollection extends Collection
{
    /**
     * @param $index
     * @return ShippingRateDraft
     */
    public function at($index);

    /**
     * @return ShippingRateDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingRateDraft
     */
    public function map($data, $index);
}
