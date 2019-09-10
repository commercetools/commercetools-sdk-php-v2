<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\Type\CustomFields;

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
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return string|null
     */
    public function getProductId();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getProductSlug();
    
    /**
     *
     * @return ProductTypeReference|null
     */
    public function getProductType();
    
    /**
     *
     * @return ProductVariant|null
     */
    public function getVariant();
    
    /**
     *
     * @return Price|null
     */
    public function getPrice();
    
    /**
     *
     * @return TaxedItemPrice|null
     */
    public function getTaxedPrice();
    
    /**
     *
     * @return Money|null
     */
    public function getTotalPrice();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    
    /**
     *
     * @return ItemStateCollection|null
     */
    public function getState();
    
    /**
     *
     * @return TaxRate|null
     */
    public function getTaxRate();
    
    /**
     *
     * @return ChannelReference|null
     */
    public function getSupplyChannel();
    
    /**
     *
     * @return ChannelReference|null
     */
    public function getDistributionChannel();
    
    /**
     *
     * @return DiscountedLineItemPriceForQuantityCollection|null
     */
    public function getDiscountedPricePerQuantity();
    
    /**
     *
     * @return string|null
     */
    public function getPriceMode();
    
    /**
     *
     * @return string|null
     */
    public function getLineItemMode();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    
    /**
     *
     * @return ItemShippingDetails|null
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