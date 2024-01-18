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
 * @implements Builder<ProductSearchExistsExpression>
 */
final class ProductSearchExistsExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchExistsValue|ProductSearchExistsValueBuilder
     */
    private $exists;

    /**

     * @return null|ProductSearchExistsValue
     */
    public function getExists()
    {
        return $this->exists instanceof ProductSearchExistsValueBuilder ? $this->exists->build() : $this->exists;
    }

    /**
     * @param ?ProductSearchExistsValue $exists
     * @return $this
     */
    public function withExists(?ProductSearchExistsValue $exists)
    {
        $this->exists = $exists;

        return $this;
    }

    /**
     * @deprecated use withExists() instead
     * @return $this
     */
    public function withExistsBuilder(?ProductSearchExistsValueBuilder $exists)
    {
        $this->exists = $exists;

        return $this;
    }

    public function build(): ProductSearchExistsExpression
    {
        return new ProductSearchExistsExpressionModel(
            $this->exists instanceof ProductSearchExistsValueBuilder ? $this->exists->build() : $this->exists
        );
    }

    public static function of(): ProductSearchExistsExpressionBuilder
    {
        return new self();
    }
}
