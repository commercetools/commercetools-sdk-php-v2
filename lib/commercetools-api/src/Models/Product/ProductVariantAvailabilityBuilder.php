<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantAvailability>
 */
final class ProductVariantAvailabilityBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $availableQuantity;
    
    /**
     * @var ?ProductVariantChannelAvailabilityMapBuilder|ProductVariantChannelAvailabilityMap
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
       return $this->availableQuantity;
    }
    
    /**
     *
     * @return ProductVariantChannelAvailabilityMap|null
     */
    final public function getChannels()
    {
       return ($this->channels instanceof ProductVariantChannelAvailabilityMapBuilder ? $this->channels->build() : $this->channels);
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
     * @return bool|null
     */
    final public function getIsOnStock()
    {
       return $this->isOnStock;
    }
    /**
     * @return $this
     */
    final public function withAvailableQuantity(?int $availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withChannels(?ProductVariantChannelAvailabilityMap $channels)
    {
        $this->channels = $channels;
        
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
    final public function withIsOnStock(?bool $isOnStock)
    {
        $this->isOnStock = $isOnStock;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withChannelsBuilder(?ProductVariantChannelAvailabilityMapBuilder $channels)
    {
        $this->channels = $channels;
        
        return $this;
    }
    
    public function build(): ProductVariantAvailability {
        return new ProductVariantAvailabilityModel(
            $this->availableQuantity,
            ($this->channels instanceof ProductVariantChannelAvailabilityMapBuilder ? $this->channels->build() : $this->channels),
            $this->restockableInDays,
            $this->isOnStock
        );
    }
    
    public static function of(): ProductVariantAvailabilityBuilder
    {
        return new self();
    }
}