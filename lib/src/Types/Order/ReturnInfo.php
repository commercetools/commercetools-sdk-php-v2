<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

interface ReturnInfo extends JsonObject
{
    const FIELD_ITEMS = 'items';
    const FIELD_RETURN_TRACKING_ID = 'returnTrackingId';
    const FIELD_RETURN_DATE = 'returnDate';

    /**
     * @return ReturnItemCollection
     */
    public function getItems();

    /**
     * @return string
     */
    public function getReturnTrackingId();

    /**
     * @return \DateTimeImmutable
     */
    public function getReturnDate();

    /**
     * @param ReturnItemCollection $items
     * @return $this
     */
    public function setItems(ReturnItemCollection $items);

    /**
     * @param string $returnTrackingId
     * @return $this
     */
    public function setReturnTrackingId(string $returnTrackingId);

    /**
     * @param \DateTimeImmutable $returnDate
     * @return $this
     */
    public function setReturnDate($returnDate);

}
