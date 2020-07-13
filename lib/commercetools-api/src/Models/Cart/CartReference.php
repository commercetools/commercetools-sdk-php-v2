<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|Cart
     */
    public function getObj();

    /**
     * @param ?Cart $obj
     */
    public function setObj(?Cart $obj): void;
}
