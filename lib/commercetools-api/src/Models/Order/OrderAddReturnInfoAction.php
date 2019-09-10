<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OrderAddReturnInfoAction extends OrderUpdateAction
{
    
    const FIELD_RETURN_TRACKING_ID = 'returnTrackingId';
    const FIELD_ITEMS = 'items';
    const FIELD_RETURN_DATE = 'returnDate';

    /**
     *
     * @return string|null
     */
    public function getReturnTrackingId();
    
    /**
     *
     * @return ReturnItemDraftCollection|null
     */
    public function getItems();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getReturnDate();
    public function setReturnTrackingId(?string $returnTrackingId): void;
    
    public function setItems(?ReturnItemDraftCollection $items): void;
    
    public function setReturnDate(?DateTimeImmutable $returnDate): void;
}