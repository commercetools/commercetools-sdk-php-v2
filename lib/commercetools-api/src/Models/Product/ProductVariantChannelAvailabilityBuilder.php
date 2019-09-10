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
 * @implements Builder<ProductVariantChannelAvailability>
 */
final class ProductVariantChannelAvailabilityBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $availableQuantity;
    
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
    
    public function build(): ProductVariantChannelAvailability {
        return new ProductVariantChannelAvailabilityModel(
            $this->availableQuantity,
            $this->restockableInDays,
            $this->isOnStock
        );
    }
    
    public static function of(): ProductVariantChannelAvailabilityBuilder
    {
        return new self();
    }
}