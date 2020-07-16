<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|Type
     */
    public function getObj();

    /**
     * @param ?Type $obj
     */
    public function setObj(?Type $obj): void;
}
