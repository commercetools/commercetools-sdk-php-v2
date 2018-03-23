<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Common\Reference;

interface CustomerReference extends Reference {
    const FIELD_OBJ = 'obj';

    /**
     * @return Customer
     */
    public function getObj();

    /**
     * @param Customer $obj
     * @return $this
     */
    public function setObj(Customer $obj);

}
