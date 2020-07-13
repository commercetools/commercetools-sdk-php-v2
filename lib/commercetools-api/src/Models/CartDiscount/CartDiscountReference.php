<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|CartDiscount
     */
    public function getObj();

    /**
     * @param ?CartDiscount $obj
     */
    public function setObj(?CartDiscount $obj): void;
}
