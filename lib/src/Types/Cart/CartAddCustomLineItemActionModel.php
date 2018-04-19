<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\Money;

class CartAddCustomLineItemActionModel extends CartUpdateActionModel implements CartAddCustomLineItemAction
{
    const DISCRIMINATOR_VALUE = 'addCustomLineItem';

    /**
     * @var CustomFieldsDraft
     */
    protected $custom;
    /**
     * @var ExternalTaxRateDraft
     */
    protected $externalTaxRate;
    /**
     * @var Money
     */
    protected $money;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @var TaxCategoryReference
     */
    protected $taxCategory;

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(CartAddCustomLineItemAction::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            $value = $this->raw(CartAddCustomLineItemAction::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($value)) {
                return $this->mapData(ExternalTaxRateDraft::class, null);
            }
            $value = $this->mapData(ExternalTaxRateDraft::class, $value);

            $this->externalTaxRate = $value;
        }
        return $this->externalTaxRate;
    }
    /**
     * @return Money
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            $value = $this->raw(CartAddCustomLineItemAction::FIELD_MONEY);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->money = $value;
        }
        return $this->money;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(CartAddCustomLineItemAction::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(CartAddCustomLineItemAction::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return string
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            $value = $this->raw(CartAddCustomLineItemAction::FIELD_SLUG);
            $value = (string)$value;
            $this->slug = $value;
        }
        return $this->slug;
    }
    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            $value = $this->raw(CartAddCustomLineItemAction::FIELD_TAX_CATEGORY);
            if (is_null($value)) {
                return $this->mapData(TaxCategoryReference::class, null);
            }
            $value = $this->mapData(TaxCategoryReference::class, $value);

            $this->taxCategory = $value;
        }
        return $this->taxCategory;
    }

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }
    /**
     * @param ExternalTaxRateDraft $externalTaxRate
     * @return $this
     */
    public function setExternalTaxRate(ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }
    /**
     * @param Money $money
     * @return $this
     */
    public function setMoney(Money $money)
    {
        $this->money = $money;

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
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

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
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

}
