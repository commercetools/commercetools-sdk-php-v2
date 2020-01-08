<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

interface CartSetShippingRateInputAction extends CartUpdateAction
{
    const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';

    /**
     * <p>Based on the definition of ShippingRateInputType.
     * If CartClassification is defined, it must be ClassificationShippingRateInput.
     * If CartScore is defined, it must be ScoreShippingRateInput.
     * Otherwise it can not bet set.</p>.
     *
     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput();

    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void;
}
