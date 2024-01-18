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
 * @implements Builder<ProductSearchExactExpression>
 */
final class ProductSearchExactExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchAnyValue|ProductSearchAnyValueBuilder
     */
    private $exact;

    /**

     * @return null|ProductSearchAnyValue
     */
    public function getExact()
    {
        return $this->exact instanceof ProductSearchAnyValueBuilder ? $this->exact->build() : $this->exact;
    }

    /**
     * @param ?ProductSearchAnyValue $exact
     * @return $this
     */
    public function withExact(?ProductSearchAnyValue $exact)
    {
        $this->exact = $exact;

        return $this;
    }

    /**
     * @deprecated use withExact() instead
     * @return $this
     */
    public function withExactBuilder(?ProductSearchAnyValueBuilder $exact)
    {
        $this->exact = $exact;

        return $this;
    }

    public function build(): ProductSearchExactExpression
    {
        return new ProductSearchExactExpressionModel(
            $this->exact instanceof ProductSearchAnyValueBuilder ? $this->exact->build() : $this->exact
        );
    }

    public static function of(): ProductSearchExactExpressionBuilder
    {
        return new self();
    }
}
