<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Prices\TaxRate;

interface LineItemImportDraft extends JsonObject
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_NAME = 'name';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_PRICE = 'price';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_STATE = 'state';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    public const FIELD_TAX_RATE = 'taxRate';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Maps to <code>LineItem.productId</code>. If the referenced <a href="ctp:api:type:Product">Product</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Product is created.</p>
     *

     * @return null|ProductKeyReference
     */
    public function getProduct();

    /**
     * <p>Maps to <code>LineItem.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Maps to <code>ProductVariantImportDraft</code>.</p>
     *

     * @return null|LineItemProductVariantImportDraft
     */
    public function getVariant();

    /**
     * <p>Maps to <code>LineItem.price</code>.</p>
     *

     * @return null|LineItemPrice
     */
    public function getPrice();

    /**
     * <p>Maps to <code>LineItem.quantity</code>.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>Maps to <code>LineItem.state</code>.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * <p>Maps to <code>LineItem.supplyChannel</code>. If the referenced <a href="ctp:api:type:Channel">Channel</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Channel is created.</p>
     *

     * @return null|ChannelKeyReference
     */
    public function getSupplyChannel();

    /**
     * <p>Maps to <code>LineItem.distributionChannel</code>. If the referenced <a href="ctp:api:type:Channel">Channel</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Channel is created.</p>
     *

     * @return null|ChannelKeyReference
     */
    public function getDistributionChannel();

    /**
     * <p>Maps to <code>LineItem.taxRate</code>.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * <p>Maps to <code>LineItem.shippingDetails</code>.</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    /**
     * <p>Maps to <code>LineItem.custom</code>.</p>
     *

     * @return null|Custom
     */
    public function getCustom();

    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LineItemProductVariantImportDraft $variant
     */
    public function setVariant(?LineItemProductVariantImportDraft $variant): void;

    /**
     * @param ?LineItemPrice $price
     */
    public function setPrice(?LineItemPrice $price): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void;

    /**
     * @param ?ChannelKeyReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelKeyReference $supplyChannel): void;

    /**
     * @param ?ChannelKeyReference $distributionChannel
     */
    public function setDistributionChannel(?ChannelKeyReference $distributionChannel): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;
}
