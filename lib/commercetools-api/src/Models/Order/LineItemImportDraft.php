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
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_NAME = 'name';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_PRICE = 'price';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_STATE = 'state';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_TAX_RATE = 'taxRate';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * <p>ID of the existing product.
     * You also need to specify the ID of the variant if this property is set or alternatively you can just specify SKU of the product variant.</p>
     *
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
     * @return null|ProductVariantImportDraft
     */
    public function getVariant();

    /**
     * @return null|PriceDraft
     */
    public function getPrice();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * <p>Connection to a particular supplier.
     * By providing supply channel information, you can uniquely identify
     * inventory entries that should be reserved.
     * The provided channel should have the
     * InventorySupply role.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * <p>The channel is used to select a ProductPrice.
     * The provided channel should have the ProductDistribution role.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?ProductVariantImportDraft $variant
     */
    public function setVariant(?ProductVariantImportDraft $variant): void;

    /**
     * @param ?PriceDraft $price
     */
    public function setPrice(?PriceDraft $price): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void;

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     */
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     */
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}
