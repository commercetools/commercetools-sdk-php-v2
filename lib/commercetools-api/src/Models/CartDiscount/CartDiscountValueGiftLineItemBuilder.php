<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;

/**
 * @implements Builder<CartDiscountValueGiftLineItem>
 */
final class CartDiscountValueGiftLineItemBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ProductReferenceBuilder|ProductReference
     */
    protected $product;
    
    /**
     * @var ?ChannelReferenceBuilder|ChannelReference
     */
    protected $supplyChannel;
    
    /**
     * @var ?int
     */
    protected $variantId;
    
    /**
     * @var ?ChannelReferenceBuilder|ChannelReference
     */
    protected $distributionChannel;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return ProductReference|null
     */
    final public function getProduct()
    {
       return ($this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product);
    }
    
    /**
     *
     * @return ChannelReference|null
     */
    final public function getSupplyChannel()
    {
       return ($this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel);
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVariantId()
    {
       return $this->variantId;
    }
    
    /**
     *
     * @return ChannelReference|null
     */
    final public function getDistributionChannel()
    {
       return ($this->distributionChannel instanceof ChannelReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel);
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProduct(?ProductReference $product)
    {
        $this->product = $product;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSupplyChannel(?ChannelReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDistributionChannel(?ChannelReference $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withProductBuilder(?ProductReferenceBuilder $product)
    {
        $this->product = $product;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSupplyChannelBuilder(?ChannelReferenceBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDistributionChannelBuilder(?ChannelReferenceBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;
        
        return $this;
    }
    
    public function build(): CartDiscountValueGiftLineItem {
        return new CartDiscountValueGiftLineItemModel(
            $this->type,
            ($this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product),
            ($this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel),
            $this->variantId,
            ($this->distributionChannel instanceof ChannelReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel)
        );
    }
    
    public static function of(): CartDiscountValueGiftLineItemBuilder
    {
        return new self();
    }
}