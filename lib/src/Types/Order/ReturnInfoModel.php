<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class ReturnInfoModel extends JsonObjectModel implements ReturnInfo
{
    /**
     * @var ReturnItemCollection
     */
    protected $items;
    /**
     * @var string
     */
    protected $returnTrackingId;
    /**
     * @var \DateTimeImmutable
     */
    protected $returnDate;

    /**
     * @return ReturnItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            $value = $this->raw(ReturnInfo::FIELD_ITEMS);
            if (is_null($value)) {
                return $this->mapData(ReturnItemCollection::class, null);
            }
            $value = $this->mapData(ReturnItemCollection::class, $value);
            $this->items = $value;
        }
        return $this->items;
    }
    /**
     * @return string
     */
    public function getReturnTrackingId()
    {
        if (is_null($this->returnTrackingId)) {
            $value = $this->raw(ReturnInfo::FIELD_RETURN_TRACKING_ID);
            $value = (string)$value;
            $this->returnTrackingId = $value;
        }
        return $this->returnTrackingId;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getReturnDate()
    {
        if (is_null($this->returnDate)) {
            $value = $this->raw(ReturnInfo::FIELD_RETURN_DATE);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->returnDate = $value;
        }
        return $this->returnDate;
    }

    /**
     * @param ReturnItemCollection $items
     * @return $this
     */
    public function setItems(ReturnItemCollection $items)
    {
        $this->items = $items;

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


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[ReturnInfo::FIELD_RETURN_DATE]) && $data[ReturnInfo::FIELD_RETURN_DATE] instanceof \DateTimeImmutable) {
            $data[ReturnInfo::FIELD_RETURN_DATE] = $data[ReturnInfo::FIELD_RETURN_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
