<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Project\ProjectUpdateActionModel;

class ProjectSetShippingRateInputTypeActionModel extends ProjectUpdateActionModel implements ProjectSetShippingRateInputTypeAction {
    const DISCRIMINATOR_VALUE = 'setShippingRateInputType';

    /**
     * @var ShippingRateInputType
     */
    protected $shippingRateInputType;

    /**
     * @return ShippingRateInputType
     */
    public function getShippingRateInputType()
    {
        if (is_null($this->shippingRateInputType)) {
            $value = $this->raw(ProjectSetShippingRateInputTypeAction::FIELD_SHIPPING_RATE_INPUT_TYPE);
            $resolvedClass = $this->resolveDiscriminator(ShippingRateInputType::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->shippingRateInputType = $value;
        }
        return $this->shippingRateInputType;
    }

    /**
     * @param ShippingRateInputType $shippingRateInputType
     * @return $this
     */
    public function setShippingRateInputType(ShippingRateInputType $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;

        return $this;
    }

}
