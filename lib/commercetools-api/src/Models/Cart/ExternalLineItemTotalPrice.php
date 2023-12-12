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

interface ExternalLineItemTotalPrice extends JsonObject
{
    public const FIELD_PRICE = 'price';
    public const FIELD_TOTAL_PRICE = 'totalPrice';

    /**
     * <p>Price of the Line Item.</p>
     *

     * @return null|Money
     */
    public function getPrice();

    /**
     * <p>Total price of the Line Item.</p>
     *

     * @return null|Money
     */
    public function getTotalPrice();

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void;

    /**
     * @param ?Money $totalPrice
     */
    public function setTotalPrice(?Money $totalPrice): void;
}
