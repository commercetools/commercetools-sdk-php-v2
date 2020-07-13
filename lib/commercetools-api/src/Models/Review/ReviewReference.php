<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|Review
     */
    public function getObj();

    /**
     * @param ?Review $obj
     */
    public function setObj(?Review $obj): void;
}
