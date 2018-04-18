<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\ShippingRateInputDraftCollection;


interface ClassificationShippingRateInputDraftCollection extends ShippingRateInputDraftCollection {
    /**
     * @param $index
     * @return ClassificationShippingRateInputDraft
     */
    public function at($index);

    /**
     * @return ClassificationShippingRateInputDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ClassificationShippingRateInputDraft
     */
    public function map($data, $index);
}
