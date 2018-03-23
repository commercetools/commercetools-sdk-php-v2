<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

class CartAddDiscountCodeActionModel extends CartUpdateActionModel implements CartAddDiscountCodeAction {
    const DISCRIMINATOR_VALUE = 'addDiscountCode';

    /**
     * @var string
     */
    protected $code;

    /**
     * @return string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            $value = $this->raw(CartAddDiscountCodeAction::FIELD_CODE);
            $value = (string)$value;
            $this->code = $value;
        }
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code)
    {
        $this->code = (string)$code;

        return $this;
    }

}
