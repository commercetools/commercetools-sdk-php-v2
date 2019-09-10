<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\JsonObject;

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
    const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getProductId();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getProductSlug();

    /**
     * @return null|ProductTypeReference
     */
    public function getProductType();

    /**
     * @return null|ProductVariant
     */
    public function getVariant();

    /**
     * @return null|Price
     */
    public function getPrice();

    /**
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * @return null|Money
     */
    public function getTotalPrice();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * @return null|ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @return null|ChannelReference
     */
    public function getDistributionChannel();

    /**
     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
     * @return null|string
     */
    public function getPriceMode();

    /**
     * @return null|string
     */
    public function getLineItemMode();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|ItemShippingDetails
     */
    public function getShippingDetails();

    public function setId(?string $id): void;

    public function setProductId(?string $productId): void;

    public function setName(?LocalizedString $name): void;

    public function setProductSlug(?LocalizedString $productSlug): void;

    public function setProductType(?ProductTypeReference $productType): void;

    public function setVariant(?ProductVariant $variant): void;

    public function setPrice(?Price $price): void;

    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;

    public function setTotalPrice(?Money $totalPrice): void;

    public function setQuantity(?int $quantity): void;

    public function setState(?ItemStateCollection $state): void;

    public function setTaxRate(?TaxRate $taxRate): void;

    public function setSupplyChannel(?ChannelReference $supplyChannel): void;

    public function setDistributionChannel(?ChannelReference $distributionChannel): void;

    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void;

    public function setPriceMode(?string $priceMode): void;

    public function setLineItemMode(?string $lineItemMode): void;

    public function setCustom(?CustomFields $custom): void;

    public function setShippingDetails(?ItemShippingDetails $shippingDetails): void;
}
