<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CentPrecisionMoneyBuilder;
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
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomLineItem>
 */
final class CustomLineItemBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $money;

    /**

     * @var null|TaxedItemPrice|TaxedItemPriceBuilder
     */
    private $taxedPrice;

    /**

     * @var ?MethodTaxedPriceCollection
     */
    private $taxedPricePortions;

    /**

     * @var null|CentPrecisionMoney|CentPrecisionMoneyBuilder
     */
    private $totalPrice;

    /**

     * @var ?string
     */
    private $slug;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var ?ItemStateCollection
     */
    private $state;

    /**

     * @var null|TaxCategoryReference|TaxCategoryReferenceBuilder
     */
    private $taxCategory;

    /**

     * @var null|TaxRate|TaxRateBuilder
     */
    private $taxRate;

    /**

     * @var ?MethodTaxRateCollection
     */
    private $perMethodTaxRate;

    /**

     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    private $discountedPricePerQuantity;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**

     * @var null|ItemShippingDetails|ItemShippingDetailsBuilder
     */
    private $shippingDetails;

    /**

     * @var ?string
     */
    private $priceMode;

    /**
     * <p>Unique identifier of the Custom Line Item.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>User-defined unique identifier of the Custom Line Item.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Name of the Custom Line Item.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Money value of the Custom Line Item.</p>
     *

     * @return null|TypedMoney
     */
    public function getMoney()
    {
        return $this->money instanceof TypedMoneyBuilder ? $this->money->build() : $this->money;
    }

    /**
     * <p>Automatically set after the <code>taxRate</code> is set.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
    }

    /**
     * <p>Total taxed prices based on the quantity of the Custom Line Item assigned to each <a href="ctp:api:type:ShippingMethod">Shipping Method</a>. Only applicable for Carts with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Automatically set after <code>perMethodTaxRate</code> is set.</p>
     *

     * @return null|MethodTaxedPriceCollection
     */
    public function getTaxedPricePortions()
    {
        return $this->taxedPricePortions;
    }

    /**
     * <p>Total price of the Custom Line Item (<code>money</code> multiplied by <code>quantity</code>).
     * If the Custom Line Item is discounted, the total price is <code>discountedPricePerQuantity</code> multiplied by <code>quantity</code>.</p>
     * <p>Includes taxes if the <a href="ctp:api:type:TaxRate">TaxRate</a> <code>includedInPrice</code> is <code>true</code>.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof CentPrecisionMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * <p>User-defined identifier used in a deep-link URL for the Custom Line Item.
     * It matches the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *

     * @return null|string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * <p>Number of Custom Line Items in the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>State of the Custom Line Item in the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>Used to select a Tax Rate when a Cart has the <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|TaxCategoryReference
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * <ul>
     * <li>For a Cart with <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, the <code>taxRate</code> of Custom Line Items is set automatically once a shipping address is set. The rate is based on the <a href="ctp:api:type:TaxCategory">TaxCategory</a> that applies for the shipping address.</li>
     * <li>For a Cart with <code>External</code> TaxMode, the <code>taxRate</code> of Custom Line Items can be set using <a href="ctp:api:type:ExternalTaxRateDraft">ExternalTaxRateDraft</a>.</li>
     * </ul>
     *

     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * <p>Tax Rate per Shipping Method for a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. For a Cart with <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a> it is automatically set after the <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a>.
     * For a Cart with <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, the Tax Rate must be set with <a href="ctp:api:type:ExternalTaxRateDraft">ExternalTaxRateDraft</a>.</p>
     *

     * @return null|MethodTaxRateCollection
     */
    public function getPerMethodTaxRate()
    {
        return $this->perMethodTaxRate;
    }

    /**
     * <p>Discounted price of a single quantity of the Custom Line Item.</p>
     *

     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        return $this->discountedPricePerQuantity;
    }

    /**
     * <p>Custom Fields of the Custom Line Item.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Container for Custom Line Item-specific addresses.</p>
     *

     * @return null|ItemShippingDetails
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails instanceof ItemShippingDetailsBuilder ? $this->shippingDetails->build() : $this->shippingDetails;
    }

    /**
     * <p>Indicates whether Cart Discounts with a matching <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemsTarget</a>, <a href="ctp:api:type:MultiBuyCustomLineItemsTarget">MultiBuyCustomLineItemsTarget</a>, or <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a> are applied to the Custom Line Item.</p>
     *

     * @return null|string
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?TypedMoney $money
     * @return $this
     */
    public function withMoney(?TypedMoney $money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @param ?TaxedItemPrice $taxedPrice
     * @return $this
     */
    public function withTaxedPrice(?TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @param ?MethodTaxedPriceCollection $taxedPricePortions
     * @return $this
     */
    public function withTaxedPricePortions(?MethodTaxedPriceCollection $taxedPricePortions)
    {
        $this->taxedPricePortions = $taxedPricePortions;

        return $this;
    }

    /**
     * @param ?CentPrecisionMoney $totalPrice
     * @return $this
     */
    public function withTotalPrice(?CentPrecisionMoney $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @param ?string $slug
     * @return $this
     */
    public function withSlug(?string $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?ItemStateCollection $state
     * @return $this
     */
    public function withState(?ItemStateCollection $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?TaxCategoryReference $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @param ?TaxRate $taxRate
     * @return $this
     */
    public function withTaxRate(?TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @param ?MethodTaxRateCollection $perMethodTaxRate
     * @return $this
     */
    public function withPerMethodTaxRate(?MethodTaxRateCollection $perMethodTaxRate)
    {
        $this->perMethodTaxRate = $perMethodTaxRate;

        return $this;
    }

    /**
     * @param ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     * @return $this
     */
    public function withDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity)
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?ItemShippingDetails $shippingDetails
     * @return $this
     */
    public function withShippingDetails(?ItemShippingDetails $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    /**
     * @param ?string $priceMode
     * @return $this
     */
    public function withPriceMode(?string $priceMode)
    {
        $this->priceMode = $priceMode;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withMoney() instead
     * @return $this
     */
    public function withMoneyBuilder(?TypedMoneyBuilder $money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @deprecated use withTaxedPrice() instead
     * @return $this
     */
    public function withTaxedPriceBuilder(?TaxedItemPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @deprecated use withTotalPrice() instead
     * @return $this
     */
    public function withTotalPriceBuilder(?CentPrecisionMoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @deprecated use withTaxCategory() instead
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @deprecated use withTaxRate() instead
     * @return $this
     */
    public function withTaxRateBuilder(?TaxRateBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withShippingDetails() instead
     * @return $this
     */
    public function withShippingDetailsBuilder(?ItemShippingDetailsBuilder $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    public function build(): CustomLineItem
    {
        return new CustomLineItemModel(
            $this->id,
            $this->key,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->money instanceof TypedMoneyBuilder ? $this->money->build() : $this->money,
            $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice,
            $this->taxedPricePortions,
            $this->totalPrice instanceof CentPrecisionMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice,
            $this->slug,
            $this->quantity,
            $this->state,
            $this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate,
            $this->perMethodTaxRate,
            $this->discountedPricePerQuantity,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->shippingDetails instanceof ItemShippingDetailsBuilder ? $this->shippingDetails->build() : $this->shippingDetails,
            $this->priceMode
        );
    }

    public static function of(): CustomLineItemBuilder
    {
        return new self();
    }
}
