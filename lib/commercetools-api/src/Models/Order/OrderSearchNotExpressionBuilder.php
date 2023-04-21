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
 * @implements Builder<OrderSearchNotExpression>
 */
final class OrderSearchNotExpressionBuilder implements Builder
{
    /**

     * @var ?OrderSearchQueryCollection
     */
    private $not;

    /**

     * @return null|OrderSearchQueryCollection
     */
    public function getNot()
    {
        return $this->not;
    }

    /**
     * @param ?OrderSearchQueryCollection $not
     * @return $this
     */
    public function withNot(?OrderSearchQueryCollection $not)
    {
        $this->not = $not;

        return $this;
    }


    public function build(): OrderSearchNotExpression
    {
        return new OrderSearchNotExpressionModel(
            $this->not
        );
    }

    public static function of(): OrderSearchNotExpressionBuilder
    {
        return new self();
    }
}
