<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Types\Common\Reference;

interface CustomObjectReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return CustomObject
     */
    public function getObj();

    /**
     * @param CustomObject $obj
     * @return $this
     */
    public function setObj(CustomObject $obj);

}
