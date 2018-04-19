<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\ShippingRateInputDraftCollection;


interface ScoreShippingRateInputDraftCollection extends ShippingRateInputDraftCollection
{
    /**
     * @param $index
     * @return ScoreShippingRateInputDraft
     */
    public function at($index);

    /**
     * @return ScoreShippingRateInputDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ScoreShippingRateInputDraft
     */
    public function map($data, $index);
}
