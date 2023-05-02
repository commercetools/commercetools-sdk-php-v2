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
 * @implements Builder<OrderSearchOrExpression>
 */
final class OrderSearchOrExpressionBuilder implements Builder
{
    /**

     * @var ?OrderSearchQueryCollection
     */
    private $or;

    /**

     * @return null|OrderSearchQueryCollection
     */
    public function getOr()
    {
        return $this->or;
    }

    /**
     * @param ?OrderSearchQueryCollection $or
     * @return $this
     */
    public function withOr(?OrderSearchQueryCollection $or)
    {
        $this->or = $or;

        return $this;
    }


    public function build(): OrderSearchOrExpression
    {
        return new OrderSearchOrExpressionModel(
            $this->or
        );
    }

    public static function of(): OrderSearchOrExpressionBuilder
    {
        return new self();
    }
}
