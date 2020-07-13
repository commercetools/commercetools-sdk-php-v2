<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxCategoryReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|TaxCategory
     */
    public function getObj();

    /**
     * @param ?TaxCategory $obj
     */
    public function setObj(?TaxCategory $obj): void;
}
