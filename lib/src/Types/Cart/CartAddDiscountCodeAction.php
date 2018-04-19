<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartAddDiscountCodeAction extends CartUpdateAction
{
    const FIELD_CODE = 'code';

    /**
     * @return string
     */
    public function getCode();

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code);

}
