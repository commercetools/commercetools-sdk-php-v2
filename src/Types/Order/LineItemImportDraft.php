<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\TaxCategory\TaxRate;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\Price;

interface LineItemImportDraft extends JsonObject {
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_NAME = 'name';
    const FIELD_VARIANT = 'variant';
    const FIELD_PRICE = 'price';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_STATE = 'state';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_TAX_RATE = 'taxRate';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return string
     */
    public function getProductId();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return ProductVariantImportDraft
     */
    public function getVariant();

    /**
     * @return Price
     */
    public function getPrice();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return ItemStateCollection
     */
    public function getState();

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @return TaxRate
     */
    public function getTaxRate();

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param string $productId
     * @return $this
     */
    public function setProductId(string $productId);

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param ProductVariantImportDraft $variant
     * @return $this
     */
    public function setVariant(ProductVariantImportDraft $variant);

    /**
     * @param Price $price
     * @return $this
     */
    public function setPrice(Price $price);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param ItemStateCollection $state
     * @return $this
     */
    public function setState(ItemStateCollection $state);

    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel);

    /**
     * @param TaxRate $taxRate
     * @return $this
     */
    public function setTaxRate(TaxRate $taxRate);

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom);

}
