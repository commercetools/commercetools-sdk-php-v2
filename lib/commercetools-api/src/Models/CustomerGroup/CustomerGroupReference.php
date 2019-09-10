<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\Common\Reference;

interface CustomerGroupReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|CustomerGroup
     */
    public function getObj();

    public function setObj(?CustomerGroup $obj): void;
}
