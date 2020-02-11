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
     * @return null|Money
     */
    public function getPrice();

    /**
     * @return null|Money
     */
    public function getTotalPrice();

    public function setPrice(?Money $price): void;

    public function setTotalPrice(?Money $totalPrice): void;
}
