<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObject;
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
     *
     * @return string|null
     */
    public function getSku();
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    public function getSupplyChannel();
    
    /**
     *
     * @return int|null
     */
    public function getQuantityOnStock();
    
    /**
     *
     * @return int|null
     */
    public function getAvailableQuantity();
    
    /**
     *
     * @return int|null
     */
    public function getRestockableInDays();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getExpectedDelivery();
    
    /**
     *
     * @return CustomFields|null
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