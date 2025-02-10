<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Price;
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
    public const FIELD_KEY = 'key';
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_PRODUCT_KEY = 'productKey';
    public const FIELD_NAME = 'name';
    public const FIELD_PRODUCT_SLUG = 'productSlug';
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_PRICE = 'price';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TAXED_PRICE_PORTIONS = 'taxedPricePortions';
    public const FIELD_STATE = 'state';
    public const FIELD_TAX_RATE = 'taxRate';
    public const FIELD_PER_METHOD_TAX_RATE = 'perMethodTaxRate';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_PRICE_MODE = 'priceMode';
    public const FIELD_LINE_ITEM_MODE = 'lineItemMode';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_ADDED_AT = 'addedAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**
     * <p>Unique identifier of the LineItem.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>User-defined unique identifier of the LineItem.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Product">Product</a> the Line Item is based on.</p>
     *

     * @return null|string
     */
    public function getProductId();

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Product">Product</a>.</p>
     * <p>This field is only present on:</p>
     * <ul>
     * <li>Line Items in a <a href="ctp:api:type:Cart">Cart</a> when the <code>key</code> is available on that specific Product at the time the LineItem was created or updated on the Cart.</li>
     * <li>Line Items in an <a href="ctp:api:type:Order">Order</a> when the <code>key</code> is available on the specific Product at the time the Order was created from the Cart.</li>
     * </ul>
     * <p>Present on resources created or updated after 3 December 2021.</p>
     *

     * @return null|string
     */
    public function getProductKey();

    /**
     * <p>Name of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p><code>slug</code> of the current version of the Product. Updated automatically if the <code>slug</code> changes. Empty if the Product has been deleted.
     * The <code>productSlug</code> field of LineItem is not expanded when using <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getProductSlug();

    /**
     * <p>Product Type of the Product.</p>
     *

     * @return null|ProductTypeReference
     */
    public function getProductType();

    /**
     * <p>Holds the data of the Product Variant added to the Cart.</p>
     * <p>The data is saved at the time the Product Variant is added to the Cart and is not updated automatically when Product Variant data changes.
     * Must be updated using the <a href="ctp:api:type:CartRecalculateAction">Recalculate</a> update action.</p>
     *

     * @return null|ProductVariant
     */
    public function getVariant();

    /**
     * <p>Price of a Line Item selected from the Product Variant according to the <a href="ctp:api:type:Product">Product</a> <code>priceMode</code>. If the <code>priceMode</code> is <code>Embedded</code> <a href="ctp:api:type:ProductPriceModeEnum">ProductPriceMode</a> and the <code>variant</code> field hasn't been updated, the price may not correspond to a price in <code>variant.prices</code>.</p>
     *

     * @return null|Price
     */
    public function getPrice();

    /**
     * <p>Number of Line Items of the given Product Variant present in the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>Total price of this Line Item equalling <code>price</code> multiplied by <code>quantity</code>. If the Line Item is discounted, the total price is the <code>discountedPricePerQuantity</code> multiplied by <code>quantity</code>.
     * Includes taxes if the <a href="ctp:api:type:TaxRate">TaxRate</a> <code>includedInPrice</code> is <code>true</code>.</p>
     * <p>If <code>ExternalPrice</code> <a href="#ctp:api:type:LineItemPriceMode">LineItemPriceMode</a> is used with high-precision money, then the total price is rounded by using the <code>HalfEven</code> rounding mode.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getTotalPrice();

    /**
     * <p>Discounted price of a single quantity of the Line Item.</p>
     *

     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
     * <p>Automatically set after <code>taxRate</code> is set.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Total taxed prices based on the quantity of Line Item assigned to each <a href="ctp:api:type:ShippingMethod">Shipping Method</a>. Only applicable for Carts with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Automatically set after <code>perMethodTaxRate</code> is set.</p>
     *

     * @return null|MethodTaxedPriceCollection
     */
    public function getTaxedPricePortions();

    /**
     * <p>State of the Line Item in the <a href="ctp:api:type:Cart">Cart</a> or the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * <ul>
     * <li>For a Cart with <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, the <code>taxRate</code> of Line Items is set automatically once a shipping address is set. The rate is based on the <a href="ctp:api:type:TaxCategory">TaxCategory</a> that applies for the shipping address.</li>
     * <li>For a Cart with <code>External</code> TaxMode, the <code>taxRate</code> of Line Items can be set using <a href="ctp:api:type:ExternalTaxRateDraft">ExternalTaxRateDraft</a>.</li>
     * </ul>
     *

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * <p>Tax Rate per Shipping Method for a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. For a Cart with <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a> it is automatically set after the <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a>.
     * For a Cart with <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, the Tax Rate must be set with <a href="ctp:api:type:ExternalTaxRateDraft">ExternalTaxRateDraft</a>.</p>
     *

     * @return null|MethodTaxRateCollection
     */
    public function getPerMethodTaxRate();

    /**
     * <p>Identifies <a href="/../api/projects/inventory">Inventory entries</a> that are reserved. The referenced Channel has the <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *

     * @return null|ChannelReference
     */
    public function getSupplyChannel();

    /**
     * <p>Used to <a href="/../api/pricing-and-discounts-overview#line-item-price-selection">select</a> a Product Price. The referenced Channel has the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *

     * @return null|ChannelReference
     */
    public function getDistributionChannel();

    /**
     * <p>Indicates how the Price for the Line Item is set.</p>
     *

     * @return null|string
     */
    public function getPriceMode();

    /**
     * <p>Indicates how the Line Item is added to the Cart.</p>
     *

     * @return null|string
     */
    public function getLineItemMode();

    /**
     * <p>Inventory mode specific to this Line Item only, and valid for the entire <code>quantity</code> of the Line Item.
     * Only present if the inventory mode is different from the <code>inventoryMode</code> specified on the <a href="ctp:api:type:Cart">Cart</a>.</p>
     *

     * @return null|string
     */
    public function getInventoryMode();

    /**
     * <p>Container for Line Item-specific addresses.</p>
     *

     * @return null|ItemShippingDetails
     */
    public function getShippingDetails();

    /**
     * <p>Custom Fields of the Line Item.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Date and time (UTC) the Line Item was added to the Cart.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * <p>Date and time (UTC) the Line Item was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?string $productKey
     */
    public function setProductKey(?string $productKey): void;

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
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?CentPrecisionMoney $totalPrice
     */
    public function setTotalPrice(?CentPrecisionMoney $totalPrice): void;

    /**
     * @param ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     */
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void;

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;

    /**
     * @param ?MethodTaxedPriceCollection $taxedPricePortions
     */
    public function setTaxedPricePortions(?MethodTaxedPriceCollection $taxedPricePortions): void;

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?MethodTaxRateCollection $perMethodTaxRate
     */
    public function setPerMethodTaxRate(?MethodTaxRateCollection $perMethodTaxRate): void;

    /**
     * @param ?ChannelReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelReference $supplyChannel): void;

    /**
     * @param ?ChannelReference $distributionChannel
     */
    public function setDistributionChannel(?ChannelReference $distributionChannel): void;

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void;

    /**
     * @param ?string $lineItemMode
     */
    public function setLineItemMode(?string $lineItemMode): void;

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void;

    /**
     * @param ?ItemShippingDetails $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetails $shippingDetails): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?DateTimeImmutable $addedAt
     */
    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
}
