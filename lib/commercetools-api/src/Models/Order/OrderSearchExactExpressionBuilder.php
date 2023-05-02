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
 * @implements Builder<OrderSearchExactExpression>
 */
final class OrderSearchExactExpressionBuilder implements Builder
{
    /**

     * @var null|OrderSearchAnyValue|OrderSearchAnyValueBuilder
     */
    private $exact;

    /**

     * @return null|OrderSearchAnyValue
     */
    public function getExact()
    {
        return $this->exact instanceof OrderSearchAnyValueBuilder ? $this->exact->build() : $this->exact;
    }

    /**
     * @param ?OrderSearchAnyValue $exact
     * @return $this
     */
    public function withExact(?OrderSearchAnyValue $exact)
    {
        $this->exact = $exact;

        return $this;
    }

    /**
     * @deprecated use withExact() instead
     * @return $this
     */
    public function withExactBuilder(?OrderSearchAnyValueBuilder $exact)
    {
        $this->exact = $exact;

        return $this;
    }

    public function build(): OrderSearchExactExpression
    {
        return new OrderSearchExactExpressionModel(
            $this->exact instanceof OrderSearchAnyValueBuilder ? $this->exact->build() : $this->exact
        );
    }

    public static function of(): OrderSearchExactExpressionBuilder
    {
        return new self();
    }
}
