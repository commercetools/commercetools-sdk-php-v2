<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\DiscountCodeKeyReference;

interface DiscountCodeInfo extends JsonObject
{
    public const FIELD_DISCOUNT_CODE = 'discountCode';
    public const FIELD_STATE = 'state';

    /**
     * <p>References a discount code by key.</p>
     *

     * @return null|DiscountCodeKeyReference
     */
    public function getDiscountCode();

    /**
     * <p>Maps to <code>DiscountCodeInfo.state</code></p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * @param ?DiscountCodeKeyReference $discountCode
     */
    public function setDiscountCode(?DiscountCodeKeyReference $discountCode): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;
}
