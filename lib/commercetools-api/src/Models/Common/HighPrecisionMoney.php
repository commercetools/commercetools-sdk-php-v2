<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;

interface HighPrecisionMoney extends TypedMoney
{
    
    const FIELD_PRECISE_AMOUNT = 'preciseAmount';

    /**
     *
     * @return int|null
     */
    public function getPreciseAmount();
    public function setPreciseAmount(?int $preciseAmount): void;
}