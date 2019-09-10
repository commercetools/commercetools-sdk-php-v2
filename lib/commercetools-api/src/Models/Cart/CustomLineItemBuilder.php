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
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;

/**
 * @implements Builder<CustomLineItem>
 */
final class CustomLineItemBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?TaxRateBuilder|TaxRate
     */
    protected $taxRate;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?ItemShippingDetailsBuilder|ItemShippingDetails
     */
    protected $shippingDetails;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $money;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
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
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
    /**
     * @var ?ItemStateCollection
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;
    
    /**
     * @var ?string
     */
    protected $slug;
    
    /**
     * @var ?TaxCategoryReferenceBuilder|TaxCategoryReference
     */
    protected $taxCategory;

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
     * @return int|null
     */
    final public function getQuantity()
    {
       return $this->quantity;
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
     * @return TypedMoney|null
     */
    final public function getMoney()
    {
       return ($this->money instanceof TypedMoneyBuilder ? $this->money->build() : $this->money);
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getTotalPrice()
    {
       return ($this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice);
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
     * @return LocalizedString|null
     */
    final public function getName()
    {
       return ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name);
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
     * @return DiscountedLineItemPriceForQuantityCollection|null
     */
    final public function getDiscountedPricePerQuantity()
    {
       return $this->discountedPricePerQuantity;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSlug()
    {
       return $this->slug;
    }
    
    /**
     *
     * @return TaxCategoryReference|null
     */
    final public function getTaxCategory()
    {
       return ($this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory);
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
    final public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;
        
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
    final public function withMoney(?TypedMoney $money)
    {
        $this->money = $money;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotalPrice(?TypedMoney $totalPrice)
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
    final public function withName(?LocalizedString $name)
    {
        $this->name = $name;
        
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
    final public function withDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity)
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSlug(?string $slug)
    {
        $this->slug = $slug;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCategory(?TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
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
    final public function withMoneyBuilder(?TypedMoneyBuilder $money)
    {
        $this->money = $money;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotalPriceBuilder(?TypedMoneyBuilder $totalPrice)
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
    final public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCategoryBuilder(?TaxCategoryReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    
    public function build(): CustomLineItem {
        return new CustomLineItemModel(
            ($this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate),
            $this->quantity,
            ($this->shippingDetails instanceof ItemShippingDetailsBuilder ? $this->shippingDetails->build() : $this->shippingDetails),
            ($this->money instanceof TypedMoneyBuilder ? $this->money->build() : $this->money),
            ($this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice),
            ($this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice),
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->state,
            $this->id,
            $this->discountedPricePerQuantity,
            $this->slug,
            ($this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory)
        );
    }
    
    public static function of(): CustomLineItemBuilder
    {
        return new self();
    }
}