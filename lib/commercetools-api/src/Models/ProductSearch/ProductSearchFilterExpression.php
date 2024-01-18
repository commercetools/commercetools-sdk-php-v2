<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFilterExpression extends ProductSearchCompoundExpression
{
    public const FIELD_FILTER = 'filter';

    /**

     * @return null|ProductSearchQueryExpressionCollection
     */
    public function getFilter();

    /**
     * @param ?ProductSearchQueryExpressionCollection $filter
     */
    public function setFilter(?ProductSearchQueryExpressionCollection $filter): void;
}
