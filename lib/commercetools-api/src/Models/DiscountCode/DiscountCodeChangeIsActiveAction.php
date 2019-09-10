<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;

interface DiscountCodeChangeIsActiveAction extends DiscountCodeUpdateAction
{
    
    const FIELD_IS_ACTIVE = 'isActive';

    /**
     *
     * @return bool|null
     */
    public function getIsActive();
    public function setIsActive(?bool $isActive): void;
}