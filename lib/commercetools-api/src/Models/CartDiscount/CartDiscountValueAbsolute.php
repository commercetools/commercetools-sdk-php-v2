<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\CentPrecisionMoneyCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountValueAbsolute extends CartDiscountValue
{
    public const FIELD_MONEY = 'money';
    public const FIELD_APPLICATION_MODE = 'applicationMode';

    /**
     * <p>Cent precision money values in different currencies.</p>
     *

     * @return null|CentPrecisionMoneyCollection
     */
    public function getMoney();

    /**
     * <p>Determines how the discount is applied on <a href="ctp:api:type:CartDiscountLineItemsTarget">CartDiscountLineItemTarget</a> and <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemTarget</a>.</p>
     *

     * @return null|string
     */
    public function getApplicationMode();

    /**
     * @param ?CentPrecisionMoneyCollection $money
     */
    public function setMoney(?CentPrecisionMoneyCollection $money): void;

    /**
     * @param ?string $applicationMode
     */
    public function setApplicationMode(?string $applicationMode): void;
}
