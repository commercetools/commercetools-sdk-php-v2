<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Types\TaxCategory\TaxRate;
use Commercetools\Types\Order\ItemState;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Order\ItemStateCollection;
use Commercetools\Types\Common\TypedMoney;

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

    /**
     * @return string
     */
    public function getId();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return TypedMoney
     */
    public function getMoney();

    /**
     * @return TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * @return TypedMoney
     */
    public function getTotalPrice();

    /**
     * @return string
     */
    public function getSlug();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return ItemStateCollection
     */
    public function getState();

    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @return TaxRate
     */
    public function getTaxRate();

    /**
     * @return DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity();

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
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param TypedMoney $money
     * @return $this
     */
    public function setMoney(TypedMoney $money);

    /**
     * @param TaxedItemPrice $taxedPrice
     * @return $this
     */
    public function setTaxedPrice(TaxedItemPrice $taxedPrice);

    /**
     * @param TypedMoney $totalPrice
     * @return $this
     */
    public function setTotalPrice(TypedMoney $totalPrice);

    /**
     * @param string $slug
     * @return $this
     */
    public function setSlug(string $slug);

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
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory);

    /**
     * @param TaxRate $taxRate
     * @return $this
     */
    public function setTaxRate(TaxRate $taxRate);

    /**
     * @param DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     * @return $this
     */
    public function setDiscountedPricePerQuantity(DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

}
