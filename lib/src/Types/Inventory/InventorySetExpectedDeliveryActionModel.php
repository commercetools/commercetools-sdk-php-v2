<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Inventory\InventoryEntryUpdateActionModel;

class InventorySetExpectedDeliveryActionModel extends InventoryEntryUpdateActionModel implements InventorySetExpectedDeliveryAction
{
    const DISCRIMINATOR_VALUE = 'setExpectedDelivery';

    /**
     * @var \DateTimeImmutable
     */
    protected $expectedDelivery;

    /**
     * @return \DateTimeImmutable
     */
    public function getExpectedDelivery()
    {
        if (is_null($this->expectedDelivery)) {
            $value = $this->raw(InventorySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->expectedDelivery = $value;
        }
        return $this->expectedDelivery;
    }

    /**
     * @param \DateTimeImmutable|\DateTime|string $expectedDelivery
     * @return $this
     */
    public function setExpectedDelivery($expectedDelivery)
    {
        if ($expectedDelivery instanceof \DateTime) {
            $expectedDelivery = \DateTimeImmutable::createFromMutable($expectedDelivery);
        }
        if (!$expectedDelivery instanceof \DateTimeImmutable) {
            $expectedDelivery = new \DateTimeImmutable($expectedDelivery);
        }
        $this->$expectedDelivery = $expectedDelivery;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[InventorySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY]) && $data[InventorySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY] instanceof \DateTimeImmutable) {
            $data[InventorySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY] = $data[InventorySetExpectedDeliveryAction::FIELD_EXPECTED_DELIVERY]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
