<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartRemoveDiscountCodeAction extends MyCartUpdateAction
{
    public const FIELD_DISCOUNT_CODE = 'discountCode';

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     *

     * @return null|DiscountCodeReference
     */
    public function getDiscountCode();

    /**
     * @param ?DiscountCodeReference $discountCode
     */
    public function setDiscountCode(?DiscountCodeReference $discountCode): void;
}
