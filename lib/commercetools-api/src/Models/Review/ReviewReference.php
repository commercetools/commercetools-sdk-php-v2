<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Common\Reference;

interface ReviewReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|Review
     */
    public function getObj();

    public function setObj(?Review $obj): void;
}
