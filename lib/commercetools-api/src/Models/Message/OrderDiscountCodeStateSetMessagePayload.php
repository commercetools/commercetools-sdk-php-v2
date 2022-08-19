<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderDiscountCodeStateSetMessagePayload extends OrderMessagePayload
{
    public const FIELD_DISCOUNT_CODE = 'discountCode';
    public const FIELD_STATE = 'state';
    public const FIELD_OLD_STATE = 'oldState';

    /**
     * <p><a href="ctp:api:type:DiscountCode">DiscountCode</a> that changed due to the recalculation.</p>
     *

     * @return null|DiscountCodeReference
     */
    public function getDiscountCode();

    /**
     * <p><a href="ctp:api:type:DiscountCodeState">DiscountCodeState</a> after the recalculation.</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * <p><a href="ctp:api:type:DiscountCodeState">DiscountCodeState</a> before the recalculation.</p>
     *

     * @return null|string
     */
    public function getOldState();

    /**
     * @param ?DiscountCodeReference $discountCode
     */
    public function setDiscountCode(?DiscountCodeReference $discountCode): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;

    /**
     * @param ?string $oldState
     */
    public function setOldState(?string $oldState): void;
}
