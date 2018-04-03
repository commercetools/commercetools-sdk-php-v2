<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderAddReturnInfoActionModel extends OrderUpdateActionModel implements OrderAddReturnInfoAction {
    const DISCRIMINATOR_VALUE = 'addReturnInfo';

    /**
     * @var ReturnItemDraftCollection
     */
    protected $items;
    /**
     * @var \DateTimeImmutable
     */
    protected $returnDate;
    /**
     * @var string
     */
    protected $returnTrackingId;

    /**
     * @return ReturnItemDraftCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            $value = $this->raw(OrderAddReturnInfoAction::FIELD_ITEMS);
            if (is_null($value)) {
                return $this->mapData(ReturnItemDraftCollection::class, null);
            }
            $value = $this->mapData(ReturnItemDraftCollection::class, $value);
            $this->items = $value;
        }
        return $this->items;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getReturnDate()
    {
        if (is_null($this->returnDate)) {
            $value = $this->raw(OrderAddReturnInfoAction::FIELD_RETURN_DATE);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->returnDate = $value;
        }
        return $this->returnDate;
    }
    /**
     * @return string
     */
    public function getReturnTrackingId()
    {
        if (is_null($this->returnTrackingId)) {
            $value = $this->raw(OrderAddReturnInfoAction::FIELD_RETURN_TRACKING_ID);
            $value = (string)$value;
            $this->returnTrackingId = $value;
        }
        return $this->returnTrackingId;
    }

    /**
     * @param ReturnItemDraftCollection $items
     * @return $this
     */
    public function setItems(ReturnItemDraftCollection $items)
    {
        $this->items = $items;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $returnDate
     * @return $this
     */
    public function setReturnDate($returnDate)
    {
        if ($returnDate instanceof \DateTime) {
            $returnDate = \DateTimeImmutable::createFromMutable($returnDate);
        }
        if (!$returnDate instanceof \DateTimeImmutable) {
            $returnDate = new \DateTimeImmutable($returnDate);
        }
        $this->$returnDate = $returnDate;

        return $this;
    }
    /**
     * @param string $returnTrackingId
     * @return $this
     */
    public function setReturnTrackingId(string $returnTrackingId)
    {
        $this->returnTrackingId = (string)$returnTrackingId;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[OrderAddReturnInfoAction::FIELD_RETURN_DATE]) && $data[OrderAddReturnInfoAction::FIELD_RETURN_DATE] instanceof \DateTimeImmutable) {
            $data[OrderAddReturnInfoAction::FIELD_RETURN_DATE] = $data[OrderAddReturnInfoAction::FIELD_RETURN_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
