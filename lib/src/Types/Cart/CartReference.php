<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Common\Reference;

interface CartReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return Cart
     */
    public function getObj();

    /**
     * @param Cart $obj
     * @return $this
     */
    public function setObj(Cart $obj);

}
