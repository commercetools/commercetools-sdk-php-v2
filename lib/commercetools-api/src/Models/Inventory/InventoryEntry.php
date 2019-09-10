<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface InventoryEntry extends LoggedResource
{
    const FIELD_SKU = 'sku';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_QUANTITY_ON_STOCK = 'quantityOnStock';
    const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';
    const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    const FIELD_EXPECTED_DELIVERY = 'expectedDelivery';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * @return null|int
     */
    public function getQuantityOnStock();

    /**
     * @return null|int
     */
    public function getAvailableQuantity();

    /**
     * @return null|int
     */
    public function getRestockableInDays();

    /**
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    public function setSku(?string $sku): void;

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    public function setQuantityOnStock(?int $quantityOnStock): void;

    public function setAvailableQuantity(?int $availableQuantity): void;

    public function setRestockableInDays(?int $restockableInDays): void;

    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void;

    public function setCustom(?CustomFields $custom): void;
}
