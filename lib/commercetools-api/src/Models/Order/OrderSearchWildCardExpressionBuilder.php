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
 * @implements Builder<OrderSearchWildCardExpression>
 */
final class OrderSearchWildCardExpressionBuilder implements Builder
{
    /**

     * @var null|OrderSearchStringValue|OrderSearchStringValueBuilder
     */
    private $wildcard;

    /**

     * @return null|OrderSearchStringValue
     */
    public function getWildcard()
    {
        return $this->wildcard instanceof OrderSearchStringValueBuilder ? $this->wildcard->build() : $this->wildcard;
    }

    /**
     * @param ?OrderSearchStringValue $wildcard
     * @return $this
     */
    public function withWildcard(?OrderSearchStringValue $wildcard)
    {
        $this->wildcard = $wildcard;

        return $this;
    }

    /**
     * @deprecated use withWildcard() instead
     * @return $this
     */
    public function withWildcardBuilder(?OrderSearchStringValueBuilder $wildcard)
    {
        $this->wildcard = $wildcard;

        return $this;
    }

    public function build(): OrderSearchWildCardExpression
    {
        return new OrderSearchWildCardExpressionModel(
            $this->wildcard instanceof OrderSearchStringValueBuilder ? $this->wildcard->build() : $this->wildcard
        );
    }

    public static function of(): OrderSearchWildCardExpressionBuilder
    {
        return new self();
    }
}
