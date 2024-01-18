<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchWildCardExpression extends ProductSearchQueryExpression
{
    public const FIELD_WILDCARD = 'wildcard';

    /**

     * @return null|ProductSearchAnyValue
     */
    public function getWildcard();

    /**
     * @param ?ProductSearchAnyValue $wildcard
     */
    public function setWildcard(?ProductSearchAnyValue $wildcard): void;
}
