<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Common\Reference;

interface TypeReference extends Reference {
    const FIELD_OBJ = 'obj';

    /**
     * @return Type
     */
    public function getObj();

    /**
     * @param Type $obj
     * @return $this
     */
    public function setObj(Type $obj);

}
