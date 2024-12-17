<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\TypedMoneyCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountValueFixed extends CartDiscountValue
{
    public const FIELD_MONEY = 'money';
    public const FIELD_APPLICATION_MODE = 'applicationMode';

    /**
     * <p>Money values in <a href="ctp:api:type:CentPrecisionMoney">cent precision</a> or <a href="ctp:api:type:HighPrecisionMoney">high precision</a> of different currencies.</p>
     *

     * @return null|TypedMoneyCollection
     */
    public function getMoney();

    /**
     * <p>Indicates how the discount is applied on <a href="ctp:api:type:CartDiscountLineItemsTarget">CartDiscountLineItemTarget</a> or <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemTarget</a>.</p>
     * <p>For <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a>, the mode can also be <code>ProportionateDistribution</code> or <code>EvenDistribution</code>.</p>
     *

     * @return null|string
     */
    public function getApplicationMode();

    /**
     * @param ?TypedMoneyCollection $money
     */
    public function setMoney(?TypedMoneyCollection $money): void;

    /**
     * @param ?string $applicationMode
     */
    public function setApplicationMode(?string $applicationMode): void;
}
