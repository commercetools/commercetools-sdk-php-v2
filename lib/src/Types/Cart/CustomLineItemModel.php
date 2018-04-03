<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Types\TaxCategory\TaxRate;
use Commercetools\Types\Order\ItemState;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Order\ItemStateCollection;
use Commercetools\Types\Common\TypedMoney;

class CustomLineItemModel extends JsonObjectModel implements CustomLineItem {
    /**
     * @var string
     */
    protected $id;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var TypedMoney
     */
    protected $money;
    /**
     * @var TaxedItemPrice
     */
    protected $taxedPrice;
    /**
     * @var TypedMoney
     */
    protected $totalPrice;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var ItemStateCollection
     */
    protected $state;
    /**
     * @var TaxCategoryReference
     */
    protected $taxCategory;
    /**
     * @var TaxRate
     */
    protected $taxRate;
    /**
     * @var DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;
    /**
     * @var CustomFields
     */
    protected $custom;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(CustomLineItem::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(CustomLineItem::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return TypedMoney
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            $value = $this->raw(CustomLineItem::FIELD_MONEY);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->money = $value;
        }
        return $this->money;
    }
    /**
     * @return TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            $value = $this->raw(CustomLineItem::FIELD_TAXED_PRICE);
            if (is_null($value)) {
                return $this->mapData(TaxedItemPrice::class, null);
            }
            $value = $this->mapData(TaxedItemPrice::class, $value);

            $this->taxedPrice = $value;
        }
        return $this->taxedPrice;
    }
    /**
     * @return TypedMoney
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            $value = $this->raw(CustomLineItem::FIELD_TOTAL_PRICE);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->totalPrice = $value;
        }
        return $this->totalPrice;
    }
    /**
     * @return string
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            $value = $this->raw(CustomLineItem::FIELD_SLUG);
            $value = (string)$value;
            $this->slug = $value;
        }
        return $this->slug;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(CustomLineItem::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return ItemStateCollection
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(CustomLineItem::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(ItemStateCollection::class, null);
            }
            $value = $this->mapData(ItemStateCollection::class, $value);
            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            $value = $this->raw(CustomLineItem::FIELD_TAX_CATEGORY);
            if (is_null($value)) {
                return $this->mapData(TaxCategoryReference::class, null);
            }
            $value = $this->mapData(TaxCategoryReference::class, $value);

            $this->taxCategory = $value;
        }
        return $this->taxCategory;
    }
    /**
     * @return TaxRate
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            $value = $this->raw(CustomLineItem::FIELD_TAX_RATE);
            if (is_null($value)) {
                return $this->mapData(TaxRate::class, null);
            }
            $value = $this->mapData(TaxRate::class, $value);

            $this->taxRate = $value;
        }
        return $this->taxRate;
    }
    /**
     * @return DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        if (is_null($this->discountedPricePerQuantity)) {
            $value = $this->raw(CustomLineItem::FIELD_DISCOUNTED_PRICE_PER_QUANTITY);
            if (is_null($value)) {
                return $this->mapData(DiscountedLineItemPriceForQuantityCollection::class, null);
            }
            $value = $this->mapData(DiscountedLineItemPriceForQuantityCollection::class, $value);
            $this->discountedPricePerQuantity = $value;
        }
        return $this->discountedPricePerQuantity;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(CustomLineItem::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

        return $this;
    }
    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @param TypedMoney $money
     * @return $this
     */
    public function setMoney(TypedMoney $money)
    {
        $this->money = $money;

        return $this;
    }
    /**
     * @param TaxedItemPrice $taxedPrice
     * @return $this
     */
    public function setTaxedPrice(TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }
    /**
     * @param TypedMoney $totalPrice
     * @return $this
     */
    public function setTotalPrice(TypedMoney $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }
    /**
     * @param string $slug
     * @return $this
     */
    public function setSlug(string $slug)
    {
        $this->slug = (string)$slug;

        return $this;
    }
    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

        return $this;
    }
    /**
     * @param ItemStateCollection $state
     * @return $this
     */
    public function setState(ItemStateCollection $state)
    {
        $this->state = $state;

        return $this;
    }
    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }
    /**
     * @param TaxRate $taxRate
     * @return $this
     */
    public function setTaxRate(TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }
    /**
     * @param DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     * @return $this
     */
    public function setDiscountedPricePerQuantity(DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity)
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;

        return $this;
    }
    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

}
