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
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceBuilder;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceBuilder;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;

/**
 * @implements Builder<LineItem>
 */
final class LineItemBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?string
     */
    protected $priceMode;
    
    /**
     * @var ?string
     */
    protected $productId;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $totalPrice;
    
    /**
     * @var ?TaxedItemPriceBuilder|TaxedItemPrice
     */
    protected $taxedPrice;
    
    /**
     * @var ?CustomFieldsBuilder|CustomFields
     */
    protected $custom;
    
    /**
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $productSlug;
    
    /**
     * @var ?TaxRateBuilder|TaxRate
     */
    protected $taxRate;
    
    /**
     * @var ?ItemShippingDetailsBuilder|ItemShippingDetails
     */
    protected $shippingDetails;
    
    /**
     * @var ?PriceBuilder|Price
     */
    protected $price;
    
    /**
     * @var ?ProductVariantBuilder|ProductVariant
     */
    protected $variant;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
    /**
     * @var ?ChannelReferenceBuilder|ChannelReference
     */
    protected $supplyChannel;
    
    /**
     * @var ?ItemStateCollection
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?ChannelReferenceBuilder|ChannelReference
     */
    protected $distributionChannel;
    
    /**
     * @var ?string
     */
    protected $lineItemMode;
    
    /**
     * @var ?ProductTypeReferenceBuilder|ProductTypeReference
     */
    protected $productType;

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
     * @return string|null
     */
    final public function getPriceMode()
    {
       return $this->priceMode;
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
     * @return Money|null
     */
    final public function getTotalPrice()
    {
       return ($this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice);
    }
    
    /**
     *
     * @return TaxedItemPrice|null
     */
    final public function getTaxedPrice()
    {
       return ($this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice);
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return DiscountedLineItemPriceForQuantityCollection|null
     */
    final public function getDiscountedPricePerQuantity()
    {
       return $this->discountedPricePerQuantity;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getProductSlug()
    {
       return ($this->productSlug instanceof LocalizedStringBuilder ? $this->productSlug->build() : $this->productSlug);
    }
    
    /**
     *
     * @return TaxRate|null
     */
    final public function getTaxRate()
    {
       return ($this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate);
    }
    
    /**
     *
     * @return ItemShippingDetails|null
     */
    final public function getShippingDetails()
    {
       return ($this->shippingDetails instanceof ItemShippingDetailsBuilder ? $this->shippingDetails->build() : $this->shippingDetails);
    }
    
    /**
     *
     * @return Price|null
     */
    final public function getPrice()
    {
       return ($this->price instanceof PriceBuilder ? $this->price->build() : $this->price);
    }
    
    /**
     *
     * @return ProductVariant|null
     */
    final public function getVariant()
    {
       return ($this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant);
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       return ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name);
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
     * @return ItemStateCollection|null
     */
    final public function getState()
    {
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
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
     *
     * @return string|null
     */
    final public function getLineItemMode()
    {
       return $this->lineItemMode;
    }
    
    /**
     *
     * @return ProductTypeReference|null
     */
    final public function getProductType()
    {
       return ($this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType);
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
    final public function withPriceMode(?string $priceMode)
    {
        $this->priceMode = $priceMode;
        
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
    final public function withTotalPrice(?Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxedPrice(?TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity)
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductSlug(?LocalizedString $productSlug)
    {
        $this->productSlug = $productSlug;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxRate(?TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingDetails(?ItemShippingDetails $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPrice(?Price $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVariant(?ProductVariant $variant)
    {
        $this->variant = $variant;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withName(?LocalizedString $name)
    {
        $this->name = $name;
        
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
    final public function withState(?ItemStateCollection $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
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
    final public function withLineItemMode(?string $lineItemMode)
    {
        $this->lineItemMode = $lineItemMode;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductType(?ProductTypeReference $productType)
    {
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTotalPriceBuilder(?MoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxedPriceBuilder(?TaxedItemPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductSlugBuilder(?LocalizedStringBuilder $productSlug)
    {
        $this->productSlug = $productSlug;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxRateBuilder(?TaxRateBuilder $taxRate)
    {
        $this->taxRate = $taxRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingDetailsBuilder(?ItemShippingDetailsBuilder $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPriceBuilder(?PriceBuilder $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVariantBuilder(?ProductVariantBuilder $variant)
    {
        $this->variant = $variant;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;
        
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
    
    /**
     * @return $this
     */
    final public function withProductTypeBuilder(?ProductTypeReferenceBuilder $productType)
    {
        $this->productType = $productType;
        
        return $this;
    }
    
    public function build(): LineItem {
        return new LineItemModel(
            $this->quantity,
            $this->priceMode,
            $this->productId,
            ($this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice),
            ($this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice),
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            $this->discountedPricePerQuantity,
            ($this->productSlug instanceof LocalizedStringBuilder ? $this->productSlug->build() : $this->productSlug),
            ($this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate),
            ($this->shippingDetails instanceof ItemShippingDetailsBuilder ? $this->shippingDetails->build() : $this->shippingDetails),
            ($this->price instanceof PriceBuilder ? $this->price->build() : $this->price),
            ($this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant),
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            ($this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel),
            $this->state,
            $this->id,
            ($this->distributionChannel instanceof ChannelReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel),
            $this->lineItemMode,
            ($this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType)
        );
    }
    
    public static function of(): LineItemBuilder
    {
        return new self();
    }
}