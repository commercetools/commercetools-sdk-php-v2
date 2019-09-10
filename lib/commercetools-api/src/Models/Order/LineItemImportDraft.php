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
use Commercetools\Base\JsonObject;

interface LineItemImportDraft extends JsonObject
{
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_NAME = 'name';
    const FIELD_VARIANT = 'variant';
    const FIELD_PRICE = 'price';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_STATE = 'state';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    const FIELD_TAX_RATE = 'taxRate';
    const FIELD_CUSTOM = 'custom';
    const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * @return null|string
     */
    public function getProductId();

    /**
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
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    public function setProductId(?string $productId): void;

    public function setName(?LocalizedString $name): void;

    public function setVariant(?ProductVariantImportDraft $variant): void;

    public function setPrice(?PriceDraft $price): void;

    public function setQuantity(?int $quantity): void;

    public function setState(?ItemStateCollection $state): void;

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;

    public function setTaxRate(?TaxRate $taxRate): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}
