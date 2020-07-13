<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|Customer
     */
    public function getObj();

    /**
     * @param ?Customer $obj
     */
    public function setObj(?Customer $obj): void;
}
