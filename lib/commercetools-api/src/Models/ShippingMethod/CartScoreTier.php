<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;

interface CartScoreTier extends ShippingRatePriceTier
{
    
    const FIELD_SCORE = 'score';
    const FIELD_PRICE = 'price';
    const FIELD_PRICE_FUNCTION = 'priceFunction';
    const FIELD_IS_MATCHING = 'isMatching';

    /**
     *
     * @return int|null
     */
    public function getScore();
    
    /**
     *
     * @return Money|null
     */
    public function getPrice();
    
    /**
     *
     * @return PriceFunction|null
     */
    public function getPriceFunction();
    
    /**
     *
     * @return bool|null
     */
    public function getIsMatching();
    public function setScore(?int $score): void;
    
    public function setPrice(?Money $price): void;
    
    public function setPriceFunction(?PriceFunction $priceFunction): void;
    
    public function setIsMatching(?bool $isMatching): void;
}