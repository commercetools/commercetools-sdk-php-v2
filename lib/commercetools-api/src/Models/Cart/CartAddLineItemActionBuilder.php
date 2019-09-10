<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;

/**
 * @implements Builder<CartAddLineItemAction>
 */
final class CartAddLineItemActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?ExternalTaxRateDraftBuilder|ExternalTaxRateDraft
     */
    protected $externalTaxRate;
    
    /**
     * @var ?ItemShippingDetailsDraftBuilder|ItemShippingDetailsDraft
     */
    protected $shippingDetails;
    
    /**
     * @var ?string
     */
    protected $productId;
    
    /**
     * @var ?ExternalLineItemTotalPriceBuilder|ExternalLineItemTotalPrice
     */
    protected $externalTotalPrice;
    
    /**
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?ChannelResourceIdentifierBuilder|ChannelResourceIdentifier
     */
    protected $supplyChannel;
    
    /**
     * @var ?int
     */
    protected $variantId;
    
    /**
     * @var ?string
     */
    protected $sku;
    
    /**
     * @var ?ChannelResourceIdentifierBuilder|ChannelResourceIdentifier
     */
    protected $distributionChannel;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $externalPrice;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       return $this->quantity;
    }
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    final public function getExternalTaxRate()
    {
       return ($this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate);
    }
    
    /**
     *
     * @return ItemShippingDetailsDraft|null
     */
    final public function getShippingDetails()
    {
       return ($this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getProductId()
    {
       return $this->productId;
    }
    
    /**
     *
     * @return ExternalLineItemTotalPrice|null
     */
    final public function getExternalTotalPrice()
    {
       return ($this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice);
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
    final public function getVariantId()
    {
       return $this->variantId;
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
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getDistributionChannel()
    {
       return ($this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel);
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getExternalPrice()
    {
       return ($this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice);
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingDetails(?ItemShippingDetailsDraft $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductId(?string $productId)
    {
        $this->productId = $productId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;
        
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
    final public function withSupplyChannel(?ChannelResourceIdentifier $supplyChannel)
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
    final public function withSku(?string $sku)
    {
        $this->sku = $sku;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDistributionChannel(?ChannelResourceIdentifier $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalPrice(?Money $externalPrice)
    {
        $this->externalPrice = $externalPrice;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withExternalTaxRateBuilder(?ExternalTaxRateDraftBuilder $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingDetailsBuilder(?ItemShippingDetailsDraftBuilder $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalTotalPriceBuilder(?ExternalLineItemTotalPriceBuilder $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;
        
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
    
    /**
     * @return $this
     */
    final public function withDistributionChannelBuilder(?ChannelResourceIdentifierBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalPriceBuilder(?MoneyBuilder $externalPrice)
    {
        $this->externalPrice = $externalPrice;
        
        return $this;
    }
    
    public function build(): CartAddLineItemAction {
        return new CartAddLineItemActionModel(
            $this->action,
            $this->quantity,
            ($this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate),
            ($this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails),
            $this->productId,
            ($this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice),
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            ($this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel),
            $this->variantId,
            $this->sku,
            ($this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel),
            ($this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice)
        );
    }
    
    public static function of(): CartAddLineItemActionBuilder
    {
        return new self();
    }
}