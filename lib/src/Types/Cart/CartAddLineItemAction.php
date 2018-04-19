<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\Money;

interface CartAddLineItemAction extends CartUpdateAction
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

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return ChannelReference
     */
    public function getDistributionChannel();

    /**
     * @return ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * @return string
     */
    public function getProductId();

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @return Money
     */
    public function getExternalPrice();

    /**
     * @return ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice();

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom);

    /**
     * @param ChannelReference $distributionChannel
     * @return $this
     */
    public function setDistributionChannel(ChannelReference $distributionChannel);

    /**
     * @param ExternalTaxRateDraft $externalTaxRate
     * @return $this
     */
    public function setExternalTaxRate(ExternalTaxRateDraft $externalTaxRate);

    /**
     * @param string $productId
     * @return $this
     */
    public function setProductId(string $productId);

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel);

    /**
     * @param Money $externalPrice
     * @return $this
     */
    public function setExternalPrice(Money $externalPrice);

    /**
     * @param ExternalLineItemTotalPrice $externalTotalPrice
     * @return $this
     */
    public function setExternalTotalPrice(ExternalLineItemTotalPrice $externalTotalPrice);

}
