<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Money;

interface CartChangeCustomLineItemMoneyAction extends CartUpdateAction
{

    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_MONEY = 'money';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|Money
     */
    public function getMoney();

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setMoney(?Money $money): void;
}
