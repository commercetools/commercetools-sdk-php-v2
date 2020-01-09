<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<LineItem>
 */
final class LineItemBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?string
     */
    private $productId;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $productSlug;

    /**
     * @var null|ProductTypeReference|ProductTypeReferenceBuilder
     */
    private $productType;

    /**
     * @var null|ProductVariant|ProductVariantBuilder
     */
    private $variant;

    /**
     * @var null|Price|PriceBuilder
     */
    private $price;

    /**
     * @var null|TaxedItemPrice|TaxedItemPriceBuilder
     */
    private $taxedPrice;

    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $totalPrice;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var ?ItemStateCollection
     */
    private $state;

    /**
     * @var null|TaxRate|TaxRateBuilder
     */
    private $taxRate;

    /**
     * @var null|ChannelReference|ChannelReferenceBuilder
     */
    private $supplyChannel;

    /**
     * @var null|ChannelReference|ChannelReferenceBuilder
     */
    private $distributionChannel;

    /**
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    private $discountedPricePerQuantity;

    /**
     * @var ?string
     */
    private $priceMode;

    /**
     * @var ?string
     */
    private $lineItemMode;

    /**
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * @var null|ItemShippingDetails|ItemShippingDetailsBuilder
     */
    private $shippingDetails;

    /**
     * <p>The unique ID of this LineItem.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * <p>The product name.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>The slug of a product is inserted on the fly.
     * It is always up-to-date and can therefore be used to link to the product detail page of the product.
     * It is empty if the product has been deleted.
     * The slug is also empty if the cart or order is retrieved via Reference Expansion or is a snapshot in a Message.</p>
     *
     * @return null|LocalizedString
     */
    public function getProductSlug()
    {
        return $this->productSlug instanceof LocalizedStringBuilder ? $this->productSlug->build() : $this->productSlug;
    }

    /**
     * @return null|ProductTypeReference
     */
    public function getProductType()
    {
        return $this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType;
    }

    /**
     * <p>The variant data is saved when the variant is added to the cart, and not updated automatically.
     * It can manually be updated with the Recalculate update action.</p>
     *
     * @return null|ProductVariant
     */
    public function getVariant()
    {
        return $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant;
    }

    /**
     * <p>The price of a line item is selected from the prices array of the product variant.
     * If the <code>variant</code> field hasn't been updated, the price may not correspond to a price in <code>variant.prices</code>.</p>
     *
     * @return null|Price
     */
    public function getPrice()
    {
        return $this->price instanceof PriceBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>Set once the <code>taxRate</code> is set.</p>
     *
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
    }

    /**
     * <p>The total price of this line item.
     * If the line item is discounted, then the <code>totalPrice</code> is the DiscountedLineItemPriceForQuantity multiplied by <code>quantity</code>.
     * Otherwise the total price is the product price multiplied by the <code>quantity</code>.
     * <code>totalPrice</code> may or may not include the taxes: it depends on the taxRate.includedInPrice property.</p>
     *
     * @return null|TypedMoney
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * <p>The amount of a LineItem in the cart.
     * Must be a positive integer.</p>
     *
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|ItemStateCollection
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>Will be set automatically in the <code>Platform</code> TaxMode once the shipping address is set is set.
     * For the <code>External</code> tax mode the tax rate has to be set explicitly with the ExternalTaxRateDraft.</p>
     *
     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * <p>The supply channel identifies the inventory entries that should be reserved.
     * The channel has
     * the role InventorySupply.</p>
     *
     * @return null|ChannelReference
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * <p>The distribution channel is used to select a ProductPrice.
     * The channel has the role ProductDistribution.</p>
     *
     * @return null|ChannelReference
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel instanceof ChannelReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel;
    }

    /**
     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        return $this->discountedPricePerQuantity;
    }

    /**
     * @return null|string
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @return null|string
     */
    public function getLineItemMode()
    {
        return $this->lineItemMode;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Container for line item specific address(es).</p>
     *
     * @return null|ItemShippingDetails
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails instanceof ItemShippingDetailsBuilder ? $this->shippingDetails->build() : $this->shippingDetails;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductId(?string $productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductSlug(?LocalizedString $productSlug)
    {
        $this->productSlug = $productSlug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductType(?ProductTypeReference $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariant(?ProductVariant $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrice(?Price $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxedPrice(?TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalPrice(?TypedMoney $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?ItemStateCollection $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxRate(?TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSupplyChannel(?ChannelReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDistributionChannel(?ChannelReference $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity)
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceMode(?string $priceMode)
    {
        $this->priceMode = $priceMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLineItemMode(?string $lineItemMode)
    {
        $this->lineItemMode = $lineItemMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingDetails(?ItemShippingDetails $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductSlugBuilder(?LocalizedStringBuilder $productSlug)
    {
        $this->productSlug = $productSlug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductTypeBuilder(?ProductTypeReferenceBuilder $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantBuilder(?ProductVariantBuilder $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceBuilder(?PriceBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxedPriceBuilder(?TaxedItemPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalPriceBuilder(?TypedMoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxRateBuilder(?TaxRateBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelReferenceBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDistributionChannelBuilder(?ChannelReferenceBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingDetailsBuilder(?ItemShippingDetailsBuilder $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    public function build(): LineItem
    {
        return new LineItemModel(
            $this->id,
            $this->productId,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->productSlug instanceof LocalizedStringBuilder ? $this->productSlug->build() : $this->productSlug,
            $this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType,
            $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant,
            $this->price instanceof PriceBuilder ? $this->price->build() : $this->price,
            $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice,
            $this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice,
            $this->quantity,
            $this->state,
            $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate,
            $this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel,
            $this->distributionChannel instanceof ChannelReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel,
            $this->discountedPricePerQuantity,
            $this->priceMode,
            $this->lineItemMode,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->shippingDetails instanceof ItemShippingDetailsBuilder ? $this->shippingDetails->build() : $this->shippingDetails
        );
    }

    public static function of(): LineItemBuilder
    {
        return new self();
    }
}
