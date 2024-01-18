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
 * @implements Builder<ProductSearchWildCardExpression>
 */
final class ProductSearchWildCardExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchAnyValue|ProductSearchAnyValueBuilder
     */
    private $wildcard;

    /**

     * @return null|ProductSearchAnyValue
     */
    public function getWildcard()
    {
        return $this->wildcard instanceof ProductSearchAnyValueBuilder ? $this->wildcard->build() : $this->wildcard;
    }

    /**
     * @param ?ProductSearchAnyValue $wildcard
     * @return $this
     */
    public function withWildcard(?ProductSearchAnyValue $wildcard)
    {
        $this->wildcard = $wildcard;

        return $this;
    }

    /**
     * @deprecated use withWildcard() instead
     * @return $this
     */
    public function withWildcardBuilder(?ProductSearchAnyValueBuilder $wildcard)
    {
        $this->wildcard = $wildcard;

        return $this;
    }

    public function build(): ProductSearchWildCardExpression
    {
        return new ProductSearchWildCardExpressionModel(
            $this->wildcard instanceof ProductSearchAnyValueBuilder ? $this->wildcard->build() : $this->wildcard
        );
    }

    public static function of(): ProductSearchWildCardExpressionBuilder
    {
        return new self();
    }
}
