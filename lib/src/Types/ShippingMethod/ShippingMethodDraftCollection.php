<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\Collection;

interface ShippingMethodDraftCollection extends Collection {
    /**
     * @param $index
     * @return ShippingMethodDraft
     */
    public function at($index);

    /**
     * @return ShippingMethodDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingMethodDraft
     */
    public function map($data, $index);
}
