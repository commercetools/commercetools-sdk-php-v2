<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<InventoryEntryDraft>
 */
final class InventoryEntryDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $expectedDelivery;
    
    /**
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?int
     */
    protected $quantityOnStock;
    
    /**
     * @var ?ChannelResourceIdentifierBuilder|ChannelResourceIdentifier
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
       return $this->expectedDelivery;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantityOnStock()
    {
       return $this->quantityOnStock;
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getSupplyChannel()
    {
       return ($this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel);
    }
    
    /**
     *
     * @return int|null
     */
    final public function getRestockableInDays()
    {
       return $this->restockableInDays;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       return $this->sku;
    }
    /**
     * @return $this
     */
    final public function withExpectedDelivery(?DateTimeImmutable $expectedDelivery)
    {
        $this->expectedDelivery = $expectedDelivery;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withQuantityOnStock(?int $quantityOnStock)
    {
        $this->quantityOnStock = $quantityOnStock;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSupplyChannel(?ChannelResourceIdentifier $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withRestockableInDays(?int $restockableInDays)
    {
        $this->restockableInDays = $restockableInDays;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSku(?string $sku)
    {
        $this->sku = $sku;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSupplyChannelBuilder(?ChannelResourceIdentifierBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;
        
        return $this;
    }
    
    public function build(): InventoryEntryDraft {
        return new InventoryEntryDraftModel(
            $this->expectedDelivery,
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            $this->quantityOnStock,
            ($this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel),
            $this->restockableInDays,
            $this->sku
        );
    }
    
    public static function of(): InventoryEntryDraftBuilder
    {
        return new self();
    }
}