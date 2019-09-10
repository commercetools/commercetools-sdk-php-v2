<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\TypedMoney;

interface ShippingRate extends JsonObject
{
    
    const FIELD_PRICE = 'price';
    const FIELD_FREE_ABOVE = 'freeAbove';
    const FIELD_IS_MATCHING = 'isMatching';
    const FIELD_TIERS = 'tiers';

    /**
     *
     * @return TypedMoney|null
     */
    public function getPrice();
    
    /**
     *
     * @return TypedMoney|null
     */
    public function getFreeAbove();
    
    /**
     *
     * @return bool|null
     */
    public function getIsMatching();
    
    /**
     *
     * @return ShippingRatePriceTierCollection|null
     */
    public function getTiers();
    public function setPrice(?TypedMoney $price): void;
    
    public function setFreeAbove(?TypedMoney $freeAbove): void;
    
    public function setIsMatching(?bool $isMatching): void;
    
    public function setTiers(?ShippingRatePriceTierCollection $tiers): void;
}