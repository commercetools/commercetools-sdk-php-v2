<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;

interface ProjectSetShippingRateInputTypeAction extends ProjectUpdateAction
{
    
    const FIELD_SHIPPING_RATE_INPUT_TYPE = 'shippingRateInputType';

    /**
     *
     * @return ShippingRateInputType|null
     */
    public function getShippingRateInputType();
    public function setShippingRateInputType(?ShippingRateInputType $shippingRateInputType): void;
}