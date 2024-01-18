<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchFilterExpression>
 */
final class ProductSearchFilterExpressionBuilder implements Builder
{
    /**

     * @var ?ProductSearchQueryExpressionCollection
     */
    private $filter;

    /**

     * @return null|ProductSearchQueryExpressionCollection
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param ?ProductSearchQueryExpressionCollection $filter
     * @return $this
     */
    public function withFilter(?ProductSearchQueryExpressionCollection $filter)
    {
        $this->filter = $filter;

        return $this;
    }


    public function build(): ProductSearchFilterExpression
    {
        return new ProductSearchFilterExpressionModel(
            $this->filter
        );
    }

    public static function of(): ProductSearchFilterExpressionBuilder
    {
        return new self();
    }
}
