<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Builder\InventoryEntryUpdateBuilder;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\Resource;

interface InventoryEntry extends Resource {
    const FIELD_SKU = 'sku';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_QUANTITY_ON_STOCK = 'quantityOnStock';
    const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';
    const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    const FIELD_EXPECTED_DELIVERY = 'expectedDelivery';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @return int
     */
    public function getQuantityOnStock();

    /**
     * @return int
     */
    public function getAvailableQuantity();

    /**
     * @return int
     */
    public function getRestockableInDays();

    /**
     * @return \DateTimeImmutable
     */
    public function getExpectedDelivery();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel);

    /**
     * @param int $quantityOnStock
     * @return $this
     */
    public function setQuantityOnStock(int $quantityOnStock);

    /**
     * @param int $availableQuantity
     * @return $this
     */
    public function setAvailableQuantity(int $availableQuantity);

    /**
     * @param int $restockableInDays
     * @return $this
     */
    public function setRestockableInDays(int $restockableInDays);

    /**
     * @param \DateTimeImmutable $expectedDelivery
     * @return $this
     */
    public function setExpectedDelivery($expectedDelivery);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @return InventoryEntryUpdateBuilder
     */
    public function update();
}
