<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Common\Reference;

interface ReviewReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return Review
     */
    public function getObj();

    /**
     * @param Review $obj
     * @return $this
     */
    public function setObj(Review $obj);

}
