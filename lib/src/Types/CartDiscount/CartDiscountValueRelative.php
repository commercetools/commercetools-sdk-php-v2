<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

interface CartDiscountValueRelative extends CartDiscountValue
{
    const FIELD_PERMYRIAD = 'permyriad';

    /**
     * @return int
     */
    public function getPermyriad();

    /**
     * @param int $permyriad
     * @return $this
     */
    public function setPermyriad(int $permyriad);

}
