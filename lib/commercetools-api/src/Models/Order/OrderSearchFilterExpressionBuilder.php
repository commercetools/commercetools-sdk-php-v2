<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSearchFilterExpression>
 */
final class OrderSearchFilterExpressionBuilder implements Builder
{
    /**

     * @var ?OrderSearchQueryExpressionCollection
     */
    private $filter;

    /**

     * @return null|OrderSearchQueryExpressionCollection
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param ?OrderSearchQueryExpressionCollection $filter
     * @return $this
     */
    public function withFilter(?OrderSearchQueryExpressionCollection $filter)
    {
        $this->filter = $filter;

        return $this;
    }


    public function build(): OrderSearchFilterExpression
    {
        return new OrderSearchFilterExpressionModel(
            $this->filter
        );
    }

    public static function of(): OrderSearchFilterExpressionBuilder
    {
        return new self();
    }
}
