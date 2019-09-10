<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ProductVariantAvailabilityModel extends JsonObjectModel implements ProductVariantAvailability
{
    
    public function __construct(
        int $availableQuantity = null,
        ProductVariantChannelAvailabilityMap $channels = null,
        int $restockableInDays = null,
        bool $isOnStock = null
    ) {
        $this->availableQuantity = $availableQuantity;
        $this->channels = $channels;
        $this->restockableInDays = $restockableInDays;
        $this->isOnStock = $isOnStock;
        
    }

    /**
     * @var ?int
     */
    protected $availableQuantity;
    
    /**
     * @var ?ProductVariantChannelAvailabilityMap
     */
    protected $channels;
    
    /**
     * @var ?int
     */
    protected $restockableInDays;
    
    /**
     * @var ?bool
     */
    protected $isOnStock;

    /**
     *
     * @return int|null
     */
    final public function getAvailableQuantity()
    {
       if (is_null($this->availableQuantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductVariantAvailability::FIELD_AVAILABLE_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->availableQuantity = (int)$data;
       }
       return $this->availableQuantity;
    }
    
    /**
     *
     * @return ProductVariantChannelAvailabilityMap|null
     */
    final public function getChannels()
    {
       if (is_null($this->channels)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductVariantAvailability::FIELD_CHANNELS);
           if (is_null($data)) {
               return null;
           }
           
           $this->channels = ProductVariantChannelAvailabilityMapModel::of($data);
       }
       return $this->channels;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getRestockableInDays()
    {
       if (is_null($this->restockableInDays)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductVariantAvailability::FIELD_RESTOCKABLE_IN_DAYS);
           if (is_null($data)) {
               return null;
           }
           $this->restockableInDays = (int)$data;
       }
       return $this->restockableInDays;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsOnStock()
    {
       if (is_null($this->isOnStock)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductVariantAvailability::FIELD_IS_ON_STOCK);
           if (is_null($data)) {
               return null;
           }
           $this->isOnStock = (bool)$data;
       }
       return $this->isOnStock;
    }
    final public function setAvailableQuantity(?int $availableQuantity): void
    {
        $this->availableQuantity = $availableQuantity;
    }
    
    final public function setChannels(?ProductVariantChannelAvailabilityMap $channels): void
    {
        $this->channels = $channels;
    }
    
    final public function setRestockableInDays(?int $restockableInDays): void
    {
        $this->restockableInDays = $restockableInDays;
    }
    
    final public function setIsOnStock(?bool $isOnStock): void
    {
        $this->isOnStock = $isOnStock;
    }
    
}