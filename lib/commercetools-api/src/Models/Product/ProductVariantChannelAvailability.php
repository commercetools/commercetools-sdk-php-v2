<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductVariantChannelAvailability extends JsonObject
{
    
    const FIELD_IS_ON_STOCK = 'isOnStock';
    const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';

    /**
     *
     * @return bool|null
     */
    public function getIsOnStock();
    
    /**
     *
     * @return int|null
     */
    public function getRestockableInDays();
    
    /**
     *
     * @return int|null
     */
    public function getAvailableQuantity();
    public function setIsOnStock(?bool $isOnStock): void;
    
    public function setRestockableInDays(?int $restockableInDays): void;
    
    public function setAvailableQuantity(?int $availableQuantity): void;
}