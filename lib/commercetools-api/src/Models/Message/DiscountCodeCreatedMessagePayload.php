<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountCode\DiscountCode;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountCodeCreatedMessagePayload extends MessagePayload
{
    public const FIELD_DISCOUNT_CODE = 'discountCode';

    /**
     * <p>The <a href="ctp:api:type:DiscountCode">Discount Code</a> that was created.</p>
     *

     * @return null|DiscountCode
     */
    public function getDiscountCode();

    /**
     * @param ?DiscountCode $discountCode
     */
    public function setDiscountCode(?DiscountCode $discountCode): void;
}
