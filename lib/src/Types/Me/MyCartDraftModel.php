<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\ShippingMethod\ShippingMethodReference;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\Address;

class MyCartDraftModel extends JsonObjectModel implements MyCartDraft {
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var string
     */
    protected $customerEmail;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $inventoryMode;
    /**
     * @var MyLineItemDraftCollection
     */
    protected $lineItems;
    /**
     * @var Address
     */
    protected $shippingAddress;
    /**
     * @var Address
     */
    protected $billingAddress;
    /**
     * @var ShippingMethodReference
     */
    protected $shippingMethod;
    /**
     * @var CustomFieldsDraft
     */
    protected $custom;
    /**
     * @var string
     */
    protected $locale;
    /**
     * @var string
     */
    protected $taxMode;
    /**
     * @var int
     */
    protected $deleteDaysAfterLastModification;

    /**
     * @return string
     */
    public function getCurrency()
    {
        if (is_null($this->currency)) {
            $value = $this->raw(MyCartDraft::FIELD_CURRENCY);
            $value = (string)$value;
            $this->currency = $value;
        }
        return $this->currency;
    }
    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        if (is_null($this->customerEmail)) {
            $value = $this->raw(MyCartDraft::FIELD_CUSTOMER_EMAIL);
            $value = (string)$value;
            $this->customerEmail = $value;
        }
        return $this->customerEmail;
    }
    /**
     * @return string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            $value = $this->raw(MyCartDraft::FIELD_COUNTRY);
            $value = (string)$value;
            $this->country = $value;
        }
        return $this->country;
    }
    /**
     * @return string
     */
    public function getInventoryMode()
    {
        if (is_null($this->inventoryMode)) {
            $value = $this->raw(MyCartDraft::FIELD_INVENTORY_MODE);
            $value = (string)$value;
            $this->inventoryMode = $value;
        }
        return $this->inventoryMode;
    }
    /**
     * @return MyLineItemDraftCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            $value = $this->raw(MyCartDraft::FIELD_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(MyLineItemDraftCollection::class, null);
            }
            $value = $this->mapData(MyLineItemDraftCollection::class, $value);
            $this->lineItems = $value;
        }
        return $this->lineItems;
    }
    /**
     * @return Address
     */
    public function getShippingAddress()
    {
        if (is_null($this->shippingAddress)) {
            $value = $this->raw(MyCartDraft::FIELD_SHIPPING_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->shippingAddress = $value;
        }
        return $this->shippingAddress;
    }
    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        if (is_null($this->billingAddress)) {
            $value = $this->raw(MyCartDraft::FIELD_BILLING_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->billingAddress = $value;
        }
        return $this->billingAddress;
    }
    /**
     * @return ShippingMethodReference
     */
    public function getShippingMethod()
    {
        if (is_null($this->shippingMethod)) {
            $value = $this->raw(MyCartDraft::FIELD_SHIPPING_METHOD);
            if (is_null($value)) {
                return $this->mapData(ShippingMethodReference::class, null);
            }
            $value = $this->mapData(ShippingMethodReference::class, $value);

            $this->shippingMethod = $value;
        }
        return $this->shippingMethod;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(MyCartDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            $value = $this->raw(MyCartDraft::FIELD_LOCALE);
            $value = (string)$value;
            $this->locale = $value;
        }
        return $this->locale;
    }
    /**
     * @return string
     */
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            $value = $this->raw(MyCartDraft::FIELD_TAX_MODE);
            $value = (string)$value;
            $this->taxMode = $value;
        }
        return $this->taxMode;
    }
    /**
     * @return int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            $value = $this->raw(MyCartDraft::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            $value = (int)$value;
            $this->deleteDaysAfterLastModification = $value;
        }
        return $this->deleteDaysAfterLastModification;
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency(string $currency)
    {
        $this->currency = (string)$currency;

        return $this;
    }
    /**
     * @param string $customerEmail
     * @return $this
     */
    public function setCustomerEmail(string $customerEmail)
    {
        $this->customerEmail = (string)$customerEmail;

        return $this;
    }
    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->country = (string)$country;

        return $this;
    }
    /**
     * @param string $inventoryMode
     * @return $this
     */
    public function setInventoryMode(string $inventoryMode)
    {
        $this->inventoryMode = (string)$inventoryMode;

        return $this;
    }
    /**
     * @param MyLineItemDraftCollection $lineItems
     * @return $this
     */
    public function setLineItems(MyLineItemDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }
    /**
     * @param Address $shippingAddress
     * @return $this
     */
    public function setShippingAddress(Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }
    /**
     * @param Address $billingAddress
     * @return $this
     */
    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }
    /**
     * @param ShippingMethodReference $shippingMethod
     * @return $this
     */
    public function setShippingMethod(ShippingMethodReference $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
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
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale)
    {
        $this->locale = (string)$locale;

        return $this;
    }
    /**
     * @param string $taxMode
     * @return $this
     */
    public function setTaxMode(string $taxMode)
    {
        $this->taxMode = (string)$taxMode;

        return $this;
    }
    /**
     * @param int $deleteDaysAfterLastModification
     * @return $this
     */
    public function setDeleteDaysAfterLastModification(int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = (int)$deleteDaysAfterLastModification;

        return $this;
    }

}
