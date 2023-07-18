<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface LineItemImportDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_PRICE = 'price';
    public const FIELD_TAX_RATE = 'taxRate';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';
    public const FIELD_STATE = 'state';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Name of the Line Item.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>The Product Variant to use as a <a href="ctp:api:type:LineItem">Line Item</a>.</p>
     *

     * @return null|ProductVariantImportDraft
     */
    public function getVariant();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Product">Product</a> the Product Variant belongs to.</p>
     * <p>If provided, you must also set <code>variant.id</code>.</p>
     *

     * @return null|string
     */
    public function getProductId();

    /**
     * <p>The number of Product Variants in the LineItem. Can be a negative value.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>The Line Item price for <code>quantity</code> = <code>1</code>. The amount can be negative.</p>
     *

     * @return null|PriceDraft
     */
    public function getPrice();

    /**
     * <p>The tax rate used to calculate the <code>taxedPrice</code> of the Order.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * <p>The Channel used to <a href="ctp:api:type:LineItemPriceSelection">select a Price</a>.
     * This Channel must have the <code>ProductDistribution</code> role.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * <p>The Channel used to supply Line Items.
     * By providing supply Channel information, you can uniquely identify <a href="ctp:api:type:InventoryEntry">Inventory entries</a> that should be reserved.
     * This Channel must have the <code>InventorySupply</code> role.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * <p>Inventory mode specific to the LineItem, valid for the entire <code>quantity</code> of the LineItem.
     * Set only if Inventory mode should be different from the <code>inventoryMode</code> specified on the <a href="ctp:api:type:OrderImportDraft">OrderImportDraft</a>.</p>
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
     * <p>States of the Line Item.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * <p>Custom Fields of the LineItem.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?ProductVariantImportDraft $variant
     */
    public function setVariant(?ProductVariantImportDraft $variant): void;

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?PriceDraft $price
     */
    public function setPrice(?PriceDraft $price): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     */
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     */
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void;

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
