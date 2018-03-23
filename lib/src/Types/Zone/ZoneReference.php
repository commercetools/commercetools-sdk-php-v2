<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Common\Reference;

interface ZoneReference extends Reference {
    const FIELD_OBJ = 'obj';

    /**
     * @return Zone
     */
    public function getObj();

    /**
     * @param Zone $obj
     * @return $this
     */
    public function setObj(Zone $obj);

}
