<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchFilterExpression extends SearchCompoundExpression
{
    public const FIELD_FILTER = 'filter';

    /**

     * @return null|SearchQueryExpressionCollection
     */
    public function getFilter();

    /**
     * @param ?SearchQueryExpressionCollection $filter
     */
    public function setFilter(?SearchQueryExpressionCollection $filter): void;
}
