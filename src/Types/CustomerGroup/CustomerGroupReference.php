<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\Common\Reference;

interface CustomerGroupReference extends Reference {
    const FIELD_OBJ = 'obj';

    /**
     * @return CustomerGroup
     */
    public function getObj();

    /**
     * @param CustomerGroup $obj
     * @return $this
     */
    public function setObj(CustomerGroup $obj);

}
