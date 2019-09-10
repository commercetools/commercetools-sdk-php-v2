<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;

interface TaxPortion extends JsonObject
{
    
    const FIELD_NAME = 'name';
    const FIELD_RATE = 'rate';
    const FIELD_AMOUNT = 'amount';

    /**
     *
     * @return string|null
     */
    public function getName();
    
    /**
     *
     * @return int|null
     */
    public function getRate();
    
    /**
     *
     * @return Money|null
     */
    public function getAmount();
    public function setName(?string $name): void;
    
    public function setRate(?int $rate): void;
    
    public function setAmount(?Money $amount): void;
}