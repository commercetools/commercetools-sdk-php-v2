<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface LineItem extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_NAME = 'name';
    public const FIELD_PRODUCT_SLUG = 'productSlug';
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_PRICE = 'price';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_ADDED_AT = 'addedAt';
    public const FIELD_STATE = 'state';
    public const FIELD_TAX_RATE = 'taxRate';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    public const FIELD_PRICE_MODE = 'priceMode';
    public const FIELD_LINE_ITEM_MODE = 'lineItemMode';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * <p>The unique ID of this LineItem.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getProductId();

    /**
     * <p>The product name.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>The slug of a product is inserted on the fly.
     * It is always up-to-date and can therefore be used to link to the product detail page of the product.
     * It is empty if the product has been deleted.
     * The slug is also empty if the cart or order is retrieved via Reference Expansion or is a snapshot in a Message.</p>
     *
     * @return null|LocalizedString
     */
    public function getProductSlug();

    /**
     * @return null|ProductTypeReference
     */
    public function getProductType();

    /**
     * <p>The variant data is saved when the variant is added to the cart, and not updated automatically.
     * It can manually be updated with the Recalculate update action.</p>
     *
     * @return null|ProductVariant
     */
    public function getVariant();

    /**
     * <p>The price of a line item is selected from the prices array of the product variant.
     * If the <code>variant</code> field hasn't been updated, the price may not correspond to a price in <code>variant.prices</code>.</p>
     *
     * @return null|Price
     */
    public function getPrice();

    /**
     * <p>Set once the <code>taxRate</code> is set.</p>
     *
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * <p>The total price of this line item.
     * If the line item is discounted, then the <code>totalPrice</code> is the DiscountedLineItemPriceForQuantity multiplied by <code>quantity</code>.
     * Otherwise the total price is the product price multiplied by the <code>quantity</code>.
     * <code>totalPrice</code> may or may not include the taxes: it depends on the taxRate.includedInPrice property.</p>
     *
     * @return null|TypedMoney
     */
    public function getTotalPrice();

    /**
     * <p>The amount of a LineItem in the cart.
     * Must be a positive integer.</p>
     *
     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>When the line item was added to the cart. Optional for backwards
     * compatibility reasons only.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * <p>Will be set automatically in the <code>Platform</code> TaxMode once the shipping address is set is set.
     * For the <code>External</code> tax mode the tax rate has to be set explicitly with the ExternalTaxRateDraft.</p>
     *
     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * <p>The supply channel identifies the inventory entries that should be reserved.
     * The channel has
     * the role InventorySupply.</p>
     *
     * @return null|ChannelReference
     */
    public function getSupplyChannel();

    /**
     * <p>The distribution channel is used to select a ProductPrice.
     * The channel has the role ProductDistribution.</p>
     *
     * @return null|ChannelReference
     */
    public function getDistributionChannel();

    /**
     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
     * @return null|string
     */
    public function getPriceMode();

    /**
     * @return null|string
     */
    public function getLineItemMode();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Container for line item specific address(es).</p>
     *
     * @return null|ItemShippingDetails
     */
    public function getShippingDetails();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $productSlug
     */
    public function setProductSlug(?LocalizedString $productSlug): void;

    /**
     * @param ?ProductTypeReference $productType
     */
    public function setProductType(?ProductTypeReference $productType): void;

    /**
     * @param ?ProductVariant $variant
     */
    public function setVariant(?ProductVariant $variant): void;

    /**
     * @param ?Price $price
     */
    public function setPrice(?Price $price): void;

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;

    /**
     * @param ?TypedMoney $totalPrice
     */
    public function setTotalPrice(?TypedMoney $totalPrice): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?DateTimeImmutable $addedAt
     */
    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?ChannelReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelReference $supplyChannel): void;

    /**
     * @param ?ChannelReference $distributionChannel
     */
    public function setDistributionChannel(?ChannelReference $distributionChannel): void;

    /**
     * @param ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     */
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void;

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void;

    /**
     * @param ?string $lineItemMode
     */
    public function setLineItemMode(?string $lineItemMode): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?ItemShippingDetails $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetails $shippingDetails): void;
}
