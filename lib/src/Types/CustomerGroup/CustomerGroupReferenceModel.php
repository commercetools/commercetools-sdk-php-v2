<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class CustomerGroupReferenceModel extends ReferenceModel implements CustomerGroupReference {
    const DISCRIMINATOR_VALUE = 'customer-group';

    /**
     * @var CustomerGroup
     */
    protected $obj;

    /**
     * @return CustomerGroup
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(CustomerGroupReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(CustomerGroup::class, null);
            }
            $value = $this->mapData(CustomerGroup::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param CustomerGroup $obj
     * @return $this
     */
    public function setObj(CustomerGroup $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
