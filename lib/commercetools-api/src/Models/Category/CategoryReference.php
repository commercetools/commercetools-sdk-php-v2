<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|Category
     */
    public function getObj();

    /**
     * @param ?Category $obj
     */
    public function setObj(?Category $obj): void;
}
