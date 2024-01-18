<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchExactExpression extends ProductSearchQueryExpression
{
    public const FIELD_EXACT = 'exact';

    /**

     * @return null|ProductSearchAnyValue
     */
    public function getExact();

    /**
     * @param ?ProductSearchAnyValue $exact
     */
    public function setExact(?ProductSearchAnyValue $exact): void;
}
