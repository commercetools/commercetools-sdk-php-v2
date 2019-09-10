<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface StagedOrderAddLineItemAction extends StagedOrderUpdateAction
{
    const FIELD_CUSTOM = 'custom';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_EXTERNAL_PRICE = 'externalPrice';
    const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';
    const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * @return null|string
     */
    public function getProductId();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * @return null|Money
     */
    public function getExternalPrice();

    /**
     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice();

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;

    public function setProductId(?string $productId): void;

    public function setVariantId(?int $variantId): void;

    public function setSku(?string $sku): void;

    public function setQuantity(?int $quantity): void;

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    public function setExternalPrice(?Money $externalPrice): void;

    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void;

    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}
