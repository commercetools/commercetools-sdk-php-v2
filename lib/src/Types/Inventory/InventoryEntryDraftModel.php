<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\Type\CustomFieldsDraft;

class InventoryEntryDraftModel extends JsonObjectModel implements InventoryEntryDraft {
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var ChannelReference
     */
    protected $supplyChannel;
    /**
     * @var int
     */
    protected $quantityOnStock;
    /**
     * @var int
     */
    protected $restockableInDays;
    /**
     * @var \DateTimeImmutable
     */
    protected $expectedDelivery;
    /**
     * @var CustomFieldsDraft
     */
    protected $custom;

    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(InventoryEntryDraft::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return ChannelReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            $value = $this->raw(InventoryEntryDraft::FIELD_SUPPLY_CHANNEL);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->supplyChannel = $value;
        }
        return $this->supplyChannel;
    }
    /**
     * @return int
     */
    public function getQuantityOnStock()
    {
        if (is_null($this->quantityOnStock)) {
            $value = $this->raw(InventoryEntryDraft::FIELD_QUANTITY_ON_STOCK);
            $value = (int)$value;
            $this->quantityOnStock = $value;
        }
        return $this->quantityOnStock;
    }
    /**
     * @return int
     */
    public function getRestockableInDays()
    {
        if (is_null($this->restockableInDays)) {
            $value = $this->raw(InventoryEntryDraft::FIELD_RESTOCKABLE_IN_DAYS);
            $value = (int)$value;
            $this->restockableInDays = $value;
        }
        return $this->restockableInDays;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getExpectedDelivery()
    {
        if (is_null($this->expectedDelivery)) {
            $value = $this->raw(InventoryEntryDraft::FIELD_EXPECTED_DELIVERY);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->expectedDelivery = $value;
        }
        return $this->expectedDelivery;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(InventoryEntryDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku)
    {
        $this->sku = (string)$sku;

        return $this;
    }
    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }
    /**
     * @param int $quantityOnStock
     * @return $this
     */
    public function setQuantityOnStock(int $quantityOnStock)
    {
        $this->quantityOnStock = (int)$quantityOnStock;

        return $this;
    }
    /**
     * @param int $restockableInDays
     * @return $this
     */
    public function setRestockableInDays(int $restockableInDays)
    {
        $this->restockableInDays = (int)$restockableInDays;

        return $this;
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
    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY]) && $data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY] instanceof \DateTimeImmutable) {
            $data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY] = $data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
