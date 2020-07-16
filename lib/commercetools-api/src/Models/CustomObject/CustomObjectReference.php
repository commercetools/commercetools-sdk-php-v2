<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomObjectReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|CustomObject
     */
    public function getObj();

    /**
     * @param ?CustomObject $obj
     */
    public function setObj(?CustomObject $obj): void;
}
