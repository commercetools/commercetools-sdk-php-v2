<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|State
     */
    public function getObj();

    public function setObj(?State $obj): void;
}
