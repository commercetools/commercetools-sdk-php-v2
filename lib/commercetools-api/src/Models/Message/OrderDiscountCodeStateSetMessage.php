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

interface OrderDiscountCodeStateSetMessage extends Message
{
    public const FIELD_DISCOUNT_CODE = 'discountCode';
    public const FIELD_STATE = 'state';
    public const FIELD_OLD_STATE = 'oldState';

    /**
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode();

    /**
     * @return null|string
     */
    public function getState();

    /**
     * @return null|string
     */
    public function getOldState();

    public function setDiscountCode(?DiscountCodeReference $discountCode): void;

    public function setState(?string $state): void;

    public function setOldState(?string $oldState): void;
}
