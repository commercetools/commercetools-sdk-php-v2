<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

interface ShippingMethodChangeIsDefaultAction extends ShippingMethodUpdateAction {
    const FIELD_IS_DEFAULT = 'isDefault';

    /**
     * @return mixed
     */
    public function getIsDefault();

    /**
     * @param mixed $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault);

}
