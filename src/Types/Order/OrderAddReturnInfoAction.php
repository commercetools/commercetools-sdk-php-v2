<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderAddReturnInfoAction extends OrderUpdateAction {
    const FIELD_ITEMS = 'items';
    const FIELD_RETURN_DATE = 'returnDate';
    const FIELD_RETURN_TRACKING_ID = 'returnTrackingId';

    /**
     * @return ReturnItemDraftCollection
     */
    public function getItems();

    /**
     * @return \DateTimeImmutable
     */
    public function getReturnDate();

    /**
     * @return string
     */
    public function getReturnTrackingId();

    /**
     * @param ReturnItemDraftCollection $items
     * @return $this
     */
    public function setItems(ReturnItemDraftCollection $items);

    /**
     * @param \DateTimeImmutable $returnDate
     * @return $this
     */
    public function setReturnDate($returnDate);

    /**
     * @param string $returnTrackingId
     * @return $this
     */
    public function setReturnTrackingId(string $returnTrackingId);

}
