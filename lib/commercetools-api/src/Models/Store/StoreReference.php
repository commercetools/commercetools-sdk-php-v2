<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|Store
     */
    public function getObj();

    public function setObj(?Store $obj): void;
}
