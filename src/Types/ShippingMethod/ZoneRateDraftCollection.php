<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\Collection;

interface ZoneRateDraftCollection extends Collection {
    /**
     * @param $index
     * @return ZoneRateDraft
     */
    public function at($index);

    /**
     * @return ZoneRateDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ZoneRateDraft
     */
    public function map($data, $index);
}
