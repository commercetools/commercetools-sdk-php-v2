<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|OrderEdit
     */
    public function getObj();

    /**
     * @param ?OrderEdit $obj
     */
    public function setObj(?OrderEdit $obj): void;
}
