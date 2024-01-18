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
 * @implements Builder<ProductSearchPrefixExpression>
 */
final class ProductSearchPrefixExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchAnyValue|ProductSearchAnyValueBuilder
     */
    private $prefix;

    /**

     * @return null|ProductSearchAnyValue
     */
    public function getPrefix()
    {
        return $this->prefix instanceof ProductSearchAnyValueBuilder ? $this->prefix->build() : $this->prefix;
    }

    /**
     * @param ?ProductSearchAnyValue $prefix
     * @return $this
     */
    public function withPrefix(?ProductSearchAnyValue $prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @deprecated use withPrefix() instead
     * @return $this
     */
    public function withPrefixBuilder(?ProductSearchAnyValueBuilder $prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function build(): ProductSearchPrefixExpression
    {
        return new ProductSearchPrefixExpressionModel(
            $this->prefix instanceof ProductSearchAnyValueBuilder ? $this->prefix->build() : $this->prefix
        );
    }

    public static function of(): ProductSearchPrefixExpressionBuilder
    {
        return new self();
    }
}
