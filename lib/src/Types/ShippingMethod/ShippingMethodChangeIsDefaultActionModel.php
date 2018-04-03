<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionModel;

class ShippingMethodChangeIsDefaultActionModel extends ShippingMethodUpdateActionModel implements ShippingMethodChangeIsDefaultAction {
    const DISCRIMINATOR_VALUE = 'changeIsDefault';

    /**
     * @var mixed
     */
    protected $isDefault;

    /**
     * @return mixed
     */
    public function getIsDefault()
    {
        if (is_null($this->isDefault)) {
            $value = $this->raw(ShippingMethodChangeIsDefaultAction::FIELD_IS_DEFAULT);
            $this->isDefault = $value;
        }
        return $this->isDefault;
    }

    /**
     * @param $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

}
