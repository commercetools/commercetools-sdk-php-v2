<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;

interface CartDiscountValueRelative extends CartDiscountValue
{
    
    const FIELD_PERMYRIAD = 'permyriad';

    /**
     *
     * @return int|null
     */
    public function getPermyriad();
    public function setPermyriad(?int $permyriad): void;
}