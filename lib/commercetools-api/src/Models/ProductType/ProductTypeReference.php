<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|ProductType
     */
    public function getObj();

    /**
     * @param ?ProductType $obj
     */
    public function setObj(?ProductType $obj): void;
}
