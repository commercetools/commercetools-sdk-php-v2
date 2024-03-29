<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountCodeInfo extends JsonObject
{
    public const FIELD_DISCOUNT_CODE = 'discountCode';
    public const FIELD_STATE = 'state';

    /**
     * <p>Discount Code associated with the Cart or Order.</p>
     *

     * @return null|DiscountCodeReference
     */
    public function getDiscountCode();

    /**
     * <p>Indicates the state of the Discount Code applied to the Cart or Order.</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * @param ?DiscountCodeReference $discountCode
     */
    public function setDiscountCode(?DiscountCodeReference $discountCode): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;
}
