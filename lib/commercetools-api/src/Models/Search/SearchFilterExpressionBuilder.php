<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SearchFilterExpression>
 */
final class SearchFilterExpressionBuilder implements Builder
{
    /**

     * @var ?SearchQueryExpressionCollection
     */
    private $filter;

    /**

     * @return null|SearchQueryExpressionCollection
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param ?SearchQueryExpressionCollection $filter
     * @return $this
     */
    public function withFilter(?SearchQueryExpressionCollection $filter)
    {
        $this->filter = $filter;

        return $this;
    }


    public function build(): SearchFilterExpression
    {
        return new SearchFilterExpressionModel(
            $this->filter
        );
    }

    public static function of(): SearchFilterExpressionBuilder
    {
        return new self();
    }
}
