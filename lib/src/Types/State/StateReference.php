<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\Common\Reference;

interface StateReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return State
     */
    public function getObj();

    /**
     * @param State $obj
     * @return $this
     */
    public function setObj(State $obj);

}
