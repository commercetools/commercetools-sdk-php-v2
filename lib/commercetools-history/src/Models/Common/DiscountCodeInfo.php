<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface DiscountCodeInfo extends JsonObject
{

    public const FIELD_DISCOUNT_CODE = 'discountCode';
    public const FIELD_STATE = 'state';

    /**
     * @return null|Reference
     */
    public function getDiscountCode();

    /**
     * @return null|string
     */
    public function getState();

    /**
     * @param ?Reference $discountCode
     */
    public function setDiscountCode(?Reference $discountCode): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;
}
