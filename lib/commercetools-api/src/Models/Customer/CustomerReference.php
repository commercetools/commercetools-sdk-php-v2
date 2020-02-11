<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Reference;

interface CustomerReference extends Reference
{

    public const FIELD_OBJ = 'obj';

    /**
     * @return null|Customer
     */
    public function getObj();

    public function setObj(?Customer $obj): void;
}
