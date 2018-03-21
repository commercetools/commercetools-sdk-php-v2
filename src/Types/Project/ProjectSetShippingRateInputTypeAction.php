<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

interface ProjectSetShippingRateInputTypeAction extends ProjectUpdateAction {
    const FIELD_SHIPPING_RATE_INPUT_TYPE = 'shippingRateInputType';

    /**
     * @return ShippingRateInputType
     */
    public function getShippingRateInputType();

    /**
     * @param ShippingRateInputType $shippingRateInputType
     * @return $this
     */
    public function setShippingRateInputType(ShippingRateInputType $shippingRateInputType);

}
