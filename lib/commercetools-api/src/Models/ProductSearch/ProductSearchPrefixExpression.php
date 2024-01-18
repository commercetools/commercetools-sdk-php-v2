<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchPrefixExpression extends ProductSearchQueryExpression
{
    public const FIELD_PREFIX = 'prefix';

    /**

     * @return null|ProductSearchAnyValue
     */
    public function getPrefix();

    /**
     * @param ?ProductSearchAnyValue $prefix
     */
    public function setPrefix(?ProductSearchAnyValue $prefix): void;
}
