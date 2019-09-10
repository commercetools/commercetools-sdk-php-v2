<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartAddDiscountCodeAction extends CartUpdateAction
{
    
    const FIELD_CODE = 'code';

    /**
     *
     * @return string|null
     */
    public function getCode();
    public function setCode(?string $code): void;
}