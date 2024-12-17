<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\TypedMoneyCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountValueFixed>
 */
final class CartDiscountValueFixedBuilder implements Builder
{
    /**

     * @var ?TypedMoneyCollection
     */
    private $money;

    /**

     * @var ?string
     */
    private $applicationMode;

    /**
     * <p>Money values in <a href="ctp:api:type:CentPrecisionMoney">cent precision</a> or <a href="ctp:api:type:HighPrecisionMoney">high precision</a> of different currencies.</p>
     *

     * @return null|TypedMoneyCollection
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * <p>Indicates how the discount is applied on <a href="ctp:api:type:CartDiscountLineItemsTarget">CartDiscountLineItemTarget</a> or <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemTarget</a>.</p>
     * <p>For <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a>, the mode can also be <code>ProportionateDistribution</code> or <code>EvenDistribution</code>.</p>
     *

     * @return null|string
     */
    public function getApplicationMode()
    {
        return $this->applicationMode;
    }

    /**
     * @param ?TypedMoneyCollection $money
     * @return $this
     */
    public function withMoney(?TypedMoneyCollection $money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @param ?string $applicationMode
     * @return $this
     */
    public function withApplicationMode(?string $applicationMode)
    {
        $this->applicationMode = $applicationMode;

        return $this;
    }


    public function build(): CartDiscountValueFixed
    {
        return new CartDiscountValueFixedModel(
            $this->money,
            $this->applicationMode
        );
    }

    public static function of(): CartDiscountValueFixedBuilder
    {
        return new self();
    }
}
