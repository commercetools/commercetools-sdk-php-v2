<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface MyCartAddLineItemAction extends MyCartUpdateAction
{
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_EXTERNAL_PRICE = 'externalPrice';
    public const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';
    public const FIELD_ADDED_AT = 'addedAt';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Product">Product</a>.</p>
     * <p>Either the <code>productId</code> and <code>variantId</code>, or <code>sku</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getProductId();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> in the Product.</p>
     * <p>If not given, the Master Variant is used.</p>
     * <p>Either the <code>productId</code> and <code>variantId</code>, or <code>sku</code> must be provided.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p><code>sku</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     * <p>Either the <code>productId</code> and <code>variantId</code>, or <code>sku</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Number of Line Items to add to the Cart.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>Used to <a href="ctp:api:type:LineItemPriceSelection">select</a> a Product Price.
     * The Channel must have the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.
     * If the Cart is bound to a <a href="ctp:api:type:Store">Store</a> with <code>distributionChannels</code> set, the Channel must match one of the Store's distribution channels.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * <p>Used to identify <a href="/../api/projects/inventory">Inventory entries</a> that must be reserved.
     * The Channel must have the <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
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
     * <p>External Tax Rate for the Line Item, if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * <p>Container for Line Item-specific addresses.</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    /**
     * <p>Date and time (UTC) the Line Item was added to the Cart.
     * If not set, it defaults to the current date and time.</p>
     * <p>Optional for backwards compatibility reasons.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * <p>Custom Fields for the Line Item.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

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
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;

    /**
     * @param ?DateTimeImmutable $addedAt
     */
    public function setAddedAt(?DateTimeImmutable $addedAt): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
