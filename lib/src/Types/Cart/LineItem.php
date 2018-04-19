<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\TaxCategory\TaxRate;
use Commercetools\Types\Order\ItemState;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Order\ItemStateCollection;
use Commercetools\Types\ProductType\ProductTypeReference;
use Commercetools\Types\Common\Price;
use Commercetools\Types\Common\Money;
use Commercetools\Types\Product\ProductVariant;

interface LineItem extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_NAME = 'name';
    const FIELD_PRODUCT_SLUG = 'productSlug';
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_VARIANT = 'variant';
    const FIELD_PRICE = 'price';
    const FIELD_TAXED_PRICE = 'taxedPrice';
    const FIELD_TOTAL_PRICE = 'totalPrice';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_STATE = 'state';
    const FIELD_TAX_RATE = 'taxRate';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    const FIELD_PRICE_MODE = 'priceMode';
    const FIELD_LINE_ITEM_MODE = 'lineItemMode';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getProductId();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getProductSlug();

    /**
     * @return ProductTypeReference
     */
    public function getProductType();

    /**
     * @return ProductVariant
     */
    public function getVariant();

    /**
     * @return Price
     */
    public function getPrice();

    /**
     * @return TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * @return Money
     */
    public function getTotalPrice();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return ItemStateCollection
     */
    public function getState();

    /**
     * @return TaxRate
     */
    public function getTaxRate();

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @return ChannelReference
     */
    public function getDistributionChannel();

    /**
     * @return DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
     * @return string
     */
    public function getPriceMode();

    /**
     * @return string
     */
    public function getLineItemMode();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

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
     * @param LocalizedString $productSlug
     * @return $this
     */
    public function setProductSlug(LocalizedString $productSlug);

    /**
     * @param ProductTypeReference $productType
     * @return $this
     */
    public function setProductType(ProductTypeReference $productType);

    /**
     * @param ProductVariant $variant
     * @return $this
     */
    public function setVariant(ProductVariant $variant);

    /**
     * @param Price $price
     * @return $this
     */
    public function setPrice(Price $price);

    /**
     * @param TaxedItemPrice $taxedPrice
     * @return $this
     */
    public function setTaxedPrice(TaxedItemPrice $taxedPrice);

    /**
     * @param Money $totalPrice
     * @return $this
     */
    public function setTotalPrice(Money $totalPrice);

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
     * @param TaxRate $taxRate
     * @return $this
     */
    public function setTaxRate(TaxRate $taxRate);

    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel);

    /**
     * @param ChannelReference $distributionChannel
     * @return $this
     */
    public function setDistributionChannel(ChannelReference $distributionChannel);

    /**
     * @param DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     * @return $this
     */
    public function setDiscountedPricePerQuantity(DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity);

    /**
     * @param string $priceMode
     * @return $this
     */
    public function setPriceMode(string $priceMode);

    /**
     * @param string $lineItemMode
     * @return $this
     */
    public function setLineItemMode(string $lineItemMode);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

}
