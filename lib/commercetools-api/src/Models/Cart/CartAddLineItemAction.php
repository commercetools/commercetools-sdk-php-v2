<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface CartAddLineItemAction extends CartUpdateAction
{

    public const FIELD_CUSTOM = 'custom';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_EXTERNAL_PRICE = 'externalPrice';
    public const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';

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
