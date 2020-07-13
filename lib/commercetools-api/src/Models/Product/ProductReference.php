<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|Product
     */
    public function getObj();

    /**
     * @param ?Product $obj
     */
    public function setObj(?Product $obj): void;
}
