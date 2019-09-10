<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;

interface CartValueTier extends ShippingRatePriceTier
{
    
    const FIELD_MINIMUM_CENT_AMOUNT = 'minimumCentAmount';
    const FIELD_PRICE = 'price';
    const FIELD_IS_MATCHING = 'isMatching';

    /**
     *
     * @return int|null
     */
    public function getMinimumCentAmount();
    
    /**
     *
     * @return Money|null
     */
    public function getPrice();
    
    /**
     *
     * @return bool|null
     */
    public function getIsMatching();
    public function setMinimumCentAmount(?int $minimumCentAmount): void;
    
    public function setPrice(?Money $price): void;
    
    public function setIsMatching(?bool $isMatching): void;
}