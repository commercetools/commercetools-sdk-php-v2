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
 * @implements Builder<OrderSearchPrefixExpression>
 */
final class OrderSearchPrefixExpressionBuilder implements Builder
{
    /**

     * @var null|OrderSearchStringValue|OrderSearchStringValueBuilder
     */
    private $prefix;

    /**

     * @return null|OrderSearchStringValue
     */
    public function getPrefix()
    {
        return $this->prefix instanceof OrderSearchStringValueBuilder ? $this->prefix->build() : $this->prefix;
    }

    /**
     * @param ?OrderSearchStringValue $prefix
     * @return $this
     */
    public function withPrefix(?OrderSearchStringValue $prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @deprecated use withPrefix() instead
     * @return $this
     */
    public function withPrefixBuilder(?OrderSearchStringValueBuilder $prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function build(): OrderSearchPrefixExpression
    {
        return new OrderSearchPrefixExpressionModel(
            $this->prefix instanceof OrderSearchStringValueBuilder ? $this->prefix->build() : $this->prefix
        );
    }

    public static function of(): OrderSearchPrefixExpressionBuilder
    {
        return new self();
    }
}
