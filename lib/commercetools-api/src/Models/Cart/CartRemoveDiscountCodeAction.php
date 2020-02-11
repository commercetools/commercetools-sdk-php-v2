<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;

interface CartRemoveDiscountCodeAction extends CartUpdateAction
{

    public const FIELD_DISCOUNT_CODE = 'discountCode';

    /**
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode();

    public function setDiscountCode(?DiscountCodeReference $discountCode): void;
}
