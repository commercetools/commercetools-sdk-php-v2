<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ReturnInfo extends JsonObject
{
    
    const FIELD_ITEMS = 'items';
    const FIELD_RETURN_TRACKING_ID = 'returnTrackingId';
    const FIELD_RETURN_DATE = 'returnDate';

    /**
     *
     * @return ReturnItemCollection|null
     */
    public function getItems();
    
    /**
     *
     * @return string|null
     */
    public function getReturnTrackingId();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getReturnDate();
    public function setItems(?ReturnItemCollection $items): void;
    
    public function setReturnTrackingId(?string $returnTrackingId): void;
    
    public function setReturnDate(?DateTimeImmutable $returnDate): void;
}