<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class InventoryEntryDraftModel extends JsonObjectModel implements InventoryEntryDraft
{
    
    public function __construct(
        DateTimeImmutable $expectedDelivery = null,
        CustomFieldsDraft $custom = null,
        int $quantityOnStock = null,
        ChannelResourceIdentifier $supplyChannel = null,
        int $restockableInDays = null,
        string $sku = null
    ) {
        $this->expectedDelivery = $expectedDelivery;
        $this->custom = $custom;
        $this->quantityOnStock = $quantityOnStock;
        $this->supplyChannel = $supplyChannel;
        $this->restockableInDays = $restockableInDays;
        $this->sku = $sku;
        
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $expectedDelivery;
    
    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?int
     */
    protected $quantityOnStock;
    
    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $supplyChannel;
    
    /**
     * @var ?int
     */
    protected $restockableInDays;
    
    /**
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getExpectedDelivery()
    {
       if (is_null($this->expectedDelivery)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(InventoryEntryDraft::FIELD_EXPECTED_DELIVERY);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->expectedDelivery = $data;
       }
       return $this->expectedDelivery;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(InventoryEntryDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsDraftModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantityOnStock()
    {
       if (is_null($this->quantityOnStock)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(InventoryEntryDraft::FIELD_QUANTITY_ON_STOCK);
           if (is_null($data)) {
               return null;
           }
           $this->quantityOnStock = (int)$data;
       }
       return $this->quantityOnStock;
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getSupplyChannel()
    {
       if (is_null($this->supplyChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(InventoryEntryDraft::FIELD_SUPPLY_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->supplyChannel = ChannelResourceIdentifierModel::of($data);
       }
       return $this->supplyChannel;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getRestockableInDays()
    {
       if (is_null($this->restockableInDays)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(InventoryEntryDraft::FIELD_RESTOCKABLE_IN_DAYS);
           if (is_null($data)) {
               return null;
           }
           $this->restockableInDays = (int)$data;
       }
       return $this->restockableInDays;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       if (is_null($this->sku)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(InventoryEntryDraft::FIELD_SKU);
           if (is_null($data)) {
               return null;
           }
           $this->sku = (string)$data;
       }
       return $this->sku;
    }
    final public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void
    {
        $this->expectedDelivery = $expectedDelivery;
    }
    
    final public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setQuantityOnStock(?int $quantityOnStock): void
    {
        $this->quantityOnStock = $quantityOnStock;
    }
    
    final public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }
    
    final public function setRestockableInDays(?int $restockableInDays): void
    {
        $this->restockableInDays = $restockableInDays;
    }
    
    final public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY]) && $data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY] instanceof \DateTimeImmutable) {
           $data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY] = $data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}