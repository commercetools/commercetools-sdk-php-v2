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
 * @implements Builder<OrderSearchAndExpression>
 */
final class OrderSearchAndExpressionBuilder implements Builder
{
    /**

     * @var ?OrderSearchQueryCollection
     */
    private $and;

    /**

     * @return null|OrderSearchQueryCollection
     */
    public function getAnd()
    {
        return $this->and;
    }

    /**
     * @param ?OrderSearchQueryCollection $and
     * @return $this
     */
    public function withAnd(?OrderSearchQueryCollection $and)
    {
        $this->and = $and;

        return $this;
    }


    public function build(): OrderSearchAndExpression
    {
        return new OrderSearchAndExpressionModel(
            $this->and
        );
    }

    public static function of(): OrderSearchAndExpressionBuilder
    {
        return new self();
    }
}
