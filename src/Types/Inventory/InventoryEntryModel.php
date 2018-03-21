<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Common\ResourceModel;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Builder\InventoryEntryUpdateBuilder;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\Resource;

class InventoryEntryModel extends ResourceModel implements InventoryEntry {
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
    protected $availableQuantity;
    /**
     * @var int
     */
    protected $restockableInDays;
    /**
     * @var \DateTimeImmutable
     */
    protected $expectedDelivery;
    /**
     * @var CustomFields
     */
    protected $custom;

    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(InventoryEntry::FIELD_SKU);
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
            $value = $this->raw(InventoryEntry::FIELD_SUPPLY_CHANNEL);
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
            $value = $this->raw(InventoryEntry::FIELD_QUANTITY_ON_STOCK);
            $value = (int)$value;
            $this->quantityOnStock = $value;
        }
        return $this->quantityOnStock;
    }
    /**
     * @return int
     */
    public function getAvailableQuantity()
    {
        if (is_null($this->availableQuantity)) {
            $value = $this->raw(InventoryEntry::FIELD_AVAILABLE_QUANTITY);
            $value = (int)$value;
            $this->availableQuantity = $value;
        }
        return $this->availableQuantity;
    }
    /**
     * @return int
     */
    public function getRestockableInDays()
    {
        if (is_null($this->restockableInDays)) {
            $value = $this->raw(InventoryEntry::FIELD_RESTOCKABLE_IN_DAYS);
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
            $value = $this->raw(InventoryEntry::FIELD_EXPECTED_DELIVERY);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->expectedDelivery = $value;
        }
        return $this->expectedDelivery;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(InventoryEntry::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

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
     * @param int $availableQuantity
     * @return $this
     */
    public function setAvailableQuantity(int $availableQuantity)
    {
        $this->availableQuantity = (int)$availableQuantity;

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
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[InventoryEntry::FIELD_EXPECTED_DELIVERY]) && $data[InventoryEntry::FIELD_EXPECTED_DELIVERY] instanceof \DateTimeImmutable) {
            $data[InventoryEntry::FIELD_EXPECTED_DELIVERY] = $data[InventoryEntry::FIELD_EXPECTED_DELIVERY]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }

    /**
     * @return InventoryEntryUpdateBuilder
     */
    public function update()
    {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
