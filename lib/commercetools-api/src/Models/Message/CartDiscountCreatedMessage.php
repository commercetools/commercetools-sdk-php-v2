<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountCreatedMessage extends Message
{
    public const FIELD_CART_DISCOUNT = 'cartDiscount';

    /**
     * <p>The <a href="ctp:api:type:CartDiscount">Cart Discount</a> that was created.</p>
     *

     * @return null|CartDiscount
     */
    public function getCartDiscount();

    /**
     * @param ?CartDiscount $cartDiscount
     */
    public function setCartDiscount(?CartDiscount $cartDiscount): void;
}
