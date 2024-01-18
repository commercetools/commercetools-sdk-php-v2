<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchExistsExpression extends ProductSearchQueryExpression
{
    public const FIELD_EXISTS = 'exists';

    /**

     * @return null|ProductSearchExistsValue
     */
    public function getExists();

    /**
     * @param ?ProductSearchExistsValue $exists
     */
    public function setExists(?ProductSearchExistsValue $exists): void;
}
