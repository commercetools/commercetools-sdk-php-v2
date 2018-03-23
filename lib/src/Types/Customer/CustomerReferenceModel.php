<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class CustomerReferenceModel extends ReferenceModel implements CustomerReference {
    const DISCRIMINATOR_VALUE = 'customer';

    /**
     * @var Customer
     */
    protected $obj;

    /**
     * @return Customer
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(CustomerReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(Customer::class, null);
            }
            $value = $this->mapData(Customer::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param Customer $obj
     * @return $this
     */
    public function setObj(Customer $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
