<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface LineItemDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_ADDED_AT = 'addedAt';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_EXTERNAL_PRICE = 'externalPrice';
    public const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_PER_METHOD_EXTERNAL_TAX_RATE = 'perMethodExternalTaxRate';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier of the LineItem.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p><code>id</code> of a published <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getProductId();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> in the Product.
     * If not provided, the Master Variant is used.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p><code>sku</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Quantity of the Product Variant to add to the Cart.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>Date and time (UTC) the Product Variant is added to the Cart.
     * If not set, it defaults to the current date and time.</p>
     * <p>Optional for backwards compatibility reasons.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * <p>Used to <a href="ctp:api:type:LineItemPriceSelection">select</a> a Product Price.
     * The referenced Channel must have the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     * <p>If the Cart is bound to a <a href="ctp:api:type:Store">Store</a> with <code>distributionChannels</code> set,
     * the Channel must match one of the Store's distribution channels.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * <p>Used to identify <a href="/../api/projects/inventory">Inventory entries</a> that must be reserved.
     * The referenced Channel must have the <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * <p>Sets the <a href="ctp:api:type:LineItem">LineItem</a> <code>price</code> value, and the <code>priceMode</code> to <code>ExternalPrice</code> <a href="ctp:api:type:LineItemPriceMode">LineItemPriceMode</a>.</p>
     *

     * @return null|Money
     */
    public function getExternalPrice();

    /**
     * <p>Sets the <a href="ctp:api:type:LineItem">LineItem</a> <code>price</code> and <code>totalPrice</code> values, and the <code>priceMode</code> to <code>ExternalTotal</code> <a href="ctp:api:type:LineItemPriceMode">LineItemPriceMode</a>.</p>
     *

     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice();

    /**
     * <p>Sets the external Tax Rate for the Line Item, if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * <p>Sets the external Tax Rates for individual Shipping Methods, if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a> and <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|MethodExternalTaxRateDraftCollection
     */
    public function getPerMethodExternalTaxRate();

    /**
     * <p>Inventory mode specific to the Line Item only, and valid for the entire <code>quantity</code> of the Line Item.
     * Set only if the inventory mode should be different from the <code>inventoryMode</code> specified on the <a href="ctp:api:type:Cart">Cart</a>.</p>
     *

     * @return null|string
     */
    public function getInventoryMode();

    /**
     * <p>Container for Line Item-specific addresses.</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    /**
     * <p>Custom Fields for the Line Item.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?DateTimeImmutable $addedAt
     */
    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     */
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     */
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    /**
     * @param ?Money $externalPrice
     */
    public function setExternalPrice(?Money $externalPrice): void;

    /**
     * @param ?ExternalLineItemTotalPrice $externalTotalPrice
     */
    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void;

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;

    /**
     * @param ?MethodExternalTaxRateDraftCollection $perMethodExternalTaxRate
     */
    public function setPerMethodExternalTaxRate(?MethodExternalTaxRateDraftCollection $perMethodExternalTaxRate): void;

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void;

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
