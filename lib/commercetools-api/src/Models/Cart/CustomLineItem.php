<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\Type\CustomFields;

interface CustomLineItem extends JsonObject
{
    
    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_MONEY = 'money';
    const FIELD_TAXED_PRICE = 'taxedPrice';
    const FIELD_TOTAL_PRICE = 'totalPrice';
    const FIELD_SLUG = 'slug';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_STATE = 'state';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_TAX_RATE = 'taxRate';
    const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    const FIELD_CUSTOM = 'custom';
    const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return TypedMoney|null
     */
    public function getMoney();
    
    /**
     *
     * @return TaxedItemPrice|null
     */
    public function getTaxedPrice();
    
    /**
     *
     * @return TypedMoney|null
     */
    public function getTotalPrice();
    
    /**
     *
     * @return string|null
     */
    public function getSlug();
    
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
     * @return TaxCategoryReference|null
     */
    public function getTaxCategory();
    
    /**
     *
     * @return TaxRate|null
     */
    public function getTaxRate();
    
    /**
     *
     * @return DiscountedLineItemPriceForQuantityCollection|null
     */
    public function getDiscountedPricePerQuantity();
    
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
    
    public function setName(?LocalizedString $name): void;
    
    public function setMoney(?TypedMoney $money): void;
    
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;
    
    public function setTotalPrice(?TypedMoney $totalPrice): void;
    
    public function setSlug(?string $slug): void;
    
    public function setQuantity(?int $quantity): void;
    
    public function setState(?ItemStateCollection $state): void;
    
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void;
    
    public function setTaxRate(?TaxRate $taxRate): void;
    
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void;
    
    public function setCustom(?CustomFields $custom): void;
    
    public function setShippingDetails(?ItemShippingDetails $shippingDetails): void;
}