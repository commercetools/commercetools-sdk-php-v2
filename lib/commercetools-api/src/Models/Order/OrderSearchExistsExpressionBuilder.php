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
 * @implements Builder<OrderSearchExistsExpression>
 */
final class OrderSearchExistsExpressionBuilder implements Builder
{
    /**

     * @var null|OrderSearchQueryExpressionValue|OrderSearchQueryExpressionValueBuilder
     */
    private $exists;

    /**

     * @return null|OrderSearchQueryExpressionValue
     */
    public function getExists()
    {
        return $this->exists instanceof OrderSearchQueryExpressionValueBuilder ? $this->exists->build() : $this->exists;
    }

    /**
     * @param ?OrderSearchQueryExpressionValue $exists
     * @return $this
     */
    public function withExists(?OrderSearchQueryExpressionValue $exists)
    {
        $this->exists = $exists;

        return $this;
    }

    /**
     * @deprecated use withExists() instead
     * @return $this
     */
    public function withExistsBuilder(?OrderSearchQueryExpressionValueBuilder $exists)
    {
        $this->exists = $exists;

        return $this;
    }

    public function build(): OrderSearchExistsExpression
    {
        return new OrderSearchExistsExpressionModel(
            $this->exists instanceof OrderSearchQueryExpressionValueBuilder ? $this->exists->build() : $this->exists
        );
    }

    public static function of(): OrderSearchExistsExpressionBuilder
    {
        return new self();
    }
}
