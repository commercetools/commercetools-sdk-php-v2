<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchFilterExpression extends OrderSearchCompoundExpression
{
    public const FIELD_FILTER = 'filter';

    /**

     * @return null|OrderSearchQueryExpressionCollection
     */
    public function getFilter();

    /**
     * @param ?OrderSearchQueryExpressionCollection $filter
     */
    public function setFilter(?OrderSearchQueryExpressionCollection $filter): void;
}
