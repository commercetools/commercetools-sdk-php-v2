<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartChangeCustomLineItemMoneyAction extends CartUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_MONEY = 'money';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * <p>Value to set. Must not be empty. Can be a negative amount.</p>
     *

     * @return null|Money
     */
    public function getMoney();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?Money $money
     */
    public function setMoney(?Money $money): void;
}
