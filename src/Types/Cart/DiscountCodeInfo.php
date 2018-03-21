<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\DiscountCode\DiscountCodeReference;

interface DiscountCodeInfo extends JsonObject {
    const FIELD_DISCOUNT_CODE = 'discountCode';
    const FIELD_STATE = 'state';

    /**
     * @return DiscountCodeReference
     */
    public function getDiscountCode();

    /**
     * @return string
     */
    public function getState();

    /**
     * @param DiscountCodeReference $discountCode
     * @return $this
     */
    public function setDiscountCode(DiscountCodeReference $discountCode);

    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state);

}
