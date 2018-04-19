<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\DiscountCode\DiscountCodeReference;

class DiscountCodeInfoModel extends JsonObjectModel implements DiscountCodeInfo
{
    /**
     * @var DiscountCodeReference
     */
    protected $discountCode;
    /**
     * @var string
     */
    protected $state;

    /**
     * @return DiscountCodeReference
     */
    public function getDiscountCode()
    {
        if (is_null($this->discountCode)) {
            $value = $this->raw(DiscountCodeInfo::FIELD_DISCOUNT_CODE);
            if (is_null($value)) {
                return $this->mapData(DiscountCodeReference::class, null);
            }
            $value = $this->mapData(DiscountCodeReference::class, $value);

            $this->discountCode = $value;
        }
        return $this->discountCode;
    }
    /**
     * @return string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(DiscountCodeInfo::FIELD_STATE);
            $value = (string)$value;
            $this->state = $value;
        }
        return $this->state;
    }

    /**
     * @param DiscountCodeReference $discountCode
     * @return $this
     */
    public function setDiscountCode(DiscountCodeReference $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }
    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state)
    {
        $this->state = (string)$state;

        return $this;
    }

}
