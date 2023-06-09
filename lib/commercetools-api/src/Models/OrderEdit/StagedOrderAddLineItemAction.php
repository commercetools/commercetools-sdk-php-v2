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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface StagedOrderAddLineItemAction extends StagedOrderUpdateAction
{
    public const FIELD_KEY = 'key';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_ADDED_AT = 'addedAt';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_EXTERNAL_PRICE = 'externalPrice';
    public const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * <p>User-defined unique identifier of the LineItem.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The representation used when creating or updating a <a href="/../api/projects/types#list-of-customizable-data-types">customizable data type</a> with Custom Fields.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * <p>Controls calculation of taxed prices for Line Items, Custom Line Items, and Shipping Methods as explained in <a href="ctp:api:type:CartTaxCalculation">Cart tax calculation</a>.</p>
     *

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

     * @return null|DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * <p>Draft type that stores amounts only in cent precision for the specified currency.</p>
     *

     * @return null|Money
     */
    public function getExternalPrice();

    /**

     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice();

    /**
     * <p>For order creation and updates, the sum of the <code>targets</code> must match the quantity of the Line Items or Custom Line Items.</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     */
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;

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
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}
