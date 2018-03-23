<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\ShippingMethod\ShippingMethodReference;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\Address;

class CartDraftModel extends JsonObjectModel implements CartDraft {
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var string
     */
    protected $customerId;
    /**
     * @var string
     */
    protected $customerEmail;
    /**
     * @var CustomerGroupReference
     */
    protected $customerGroup;
    /**
     * @var string
     */
    protected $anonymousId;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $inventoryMode;
    /**
     * @var string
     */
    protected $taxMode;
    /**
     * @var string
     */
    protected $taxRoundingMode;
    /**
     * @var string
     */
    protected $taxCalculationMode;
    /**
     * @var LineItemDraftCollection
     */
    protected $lineItems;
    /**
     * @var CustomLineItemDraftCollection
     */
    protected $customLineItems;
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
     * @var ExternalTaxRateDraft
     */
    protected $externalTaxRateForShippingMethod;
    /**
     * @var CustomFieldsDraft
     */
    protected $custom;
    /**
     * @var string
     */
    protected $locale;
    /**
     * @var int
     */
    protected $deleteDaysAfterLastModification;
    /**
     * @var string
     */
    protected $origin;
    /**
     * @var ShippingRateInputDraft
     */
    protected $shippingRateInput;

    /**
     * @return string
     */
    public function getCurrency()
    {
        if (is_null($this->currency)) {
            $value = $this->raw(CartDraft::FIELD_CURRENCY);
            $value = (string)$value;
            $this->currency = $value;
        }
        return $this->currency;
    }
    /**
     * @return string
     */
    public function getCustomerId()
    {
        if (is_null($this->customerId)) {
            $value = $this->raw(CartDraft::FIELD_CUSTOMER_ID);
            $value = (string)$value;
            $this->customerId = $value;
        }
        return $this->customerId;
    }
    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        if (is_null($this->customerEmail)) {
            $value = $this->raw(CartDraft::FIELD_CUSTOMER_EMAIL);
            $value = (string)$value;
            $this->customerEmail = $value;
        }
        return $this->customerEmail;
    }
    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            $value = $this->raw(CartDraft::FIELD_CUSTOMER_GROUP);
            if (is_null($value)) {
                return $this->mapData(CustomerGroupReference::class, null);
            }
            $value = $this->mapData(CustomerGroupReference::class, $value);

            $this->customerGroup = $value;
        }
        return $this->customerGroup;
    }
    /**
     * @return string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            $value = $this->raw(CartDraft::FIELD_ANONYMOUS_ID);
            $value = (string)$value;
            $this->anonymousId = $value;
        }
        return $this->anonymousId;
    }
    /**
     * @return string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            $value = $this->raw(CartDraft::FIELD_COUNTRY);
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
            $value = $this->raw(CartDraft::FIELD_INVENTORY_MODE);
            $value = (string)$value;
            $this->inventoryMode = $value;
        }
        return $this->inventoryMode;
    }
    /**
     * @return string
     */
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            $value = $this->raw(CartDraft::FIELD_TAX_MODE);
            $value = (string)$value;
            $this->taxMode = $value;
        }
        return $this->taxMode;
    }
    /**
     * @return string
     */
    public function getTaxRoundingMode()
    {
        if (is_null($this->taxRoundingMode)) {
            $value = $this->raw(CartDraft::FIELD_TAX_ROUNDING_MODE);
            $value = (string)$value;
            $this->taxRoundingMode = $value;
        }
        return $this->taxRoundingMode;
    }
    /**
     * @return string
     */
    public function getTaxCalculationMode()
    {
        if (is_null($this->taxCalculationMode)) {
            $value = $this->raw(CartDraft::FIELD_TAX_CALCULATION_MODE);
            $value = (string)$value;
            $this->taxCalculationMode = $value;
        }
        return $this->taxCalculationMode;
    }
    /**
     * @return LineItemDraftCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            $value = $this->raw(CartDraft::FIELD_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(LineItemDraftCollection::class, null);
            }
            $value = $this->mapData(LineItemDraftCollection::class, $value);
            $this->lineItems = $value;
        }
        return $this->lineItems;
    }
    /**
     * @return CustomLineItemDraftCollection
     */
    public function getCustomLineItems()
    {
        if (is_null($this->customLineItems)) {
            $value = $this->raw(CartDraft::FIELD_CUSTOM_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(CustomLineItemDraftCollection::class, null);
            }
            $value = $this->mapData(CustomLineItemDraftCollection::class, $value);
            $this->customLineItems = $value;
        }
        return $this->customLineItems;
    }
    /**
     * @return Address
     */
    public function getShippingAddress()
    {
        if (is_null($this->shippingAddress)) {
            $value = $this->raw(CartDraft::FIELD_SHIPPING_ADDRESS);
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
            $value = $this->raw(CartDraft::FIELD_BILLING_ADDRESS);
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
            $value = $this->raw(CartDraft::FIELD_SHIPPING_METHOD);
            if (is_null($value)) {
                return $this->mapData(ShippingMethodReference::class, null);
            }
            $value = $this->mapData(ShippingMethodReference::class, $value);

            $this->shippingMethod = $value;
        }
        return $this->shippingMethod;
    }
    /**
     * @return ExternalTaxRateDraft
     */
    public function getExternalTaxRateForShippingMethod()
    {
        if (is_null($this->externalTaxRateForShippingMethod)) {
            $value = $this->raw(CartDraft::FIELD_EXTERNAL_TAX_RATE_FOR_SHIPPING_METHOD);
            if (is_null($value)) {
                return $this->mapData(ExternalTaxRateDraft::class, null);
            }
            $value = $this->mapData(ExternalTaxRateDraft::class, $value);

            $this->externalTaxRateForShippingMethod = $value;
        }
        return $this->externalTaxRateForShippingMethod;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(CartDraft::FIELD_CUSTOM);
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
            $value = $this->raw(CartDraft::FIELD_LOCALE);
            $value = (string)$value;
            $this->locale = $value;
        }
        return $this->locale;
    }
    /**
     * @return int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            $value = $this->raw(CartDraft::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            $value = (int)$value;
            $this->deleteDaysAfterLastModification = $value;
        }
        return $this->deleteDaysAfterLastModification;
    }
    /**
     * @return string
     */
    public function getOrigin()
    {
        if (is_null($this->origin)) {
            $value = $this->raw(CartDraft::FIELD_ORIGIN);
            $value = (string)$value;
            $this->origin = $value;
        }
        return $this->origin;
    }
    /**
     * @return ShippingRateInputDraft
     */
    public function getShippingRateInput()
    {
        if (is_null($this->shippingRateInput)) {
            $value = $this->raw(CartDraft::FIELD_SHIPPING_RATE_INPUT);
            $resolvedClass = $this->resolveDiscriminator(ShippingRateInputDraft::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->shippingRateInput = $value;
        }
        return $this->shippingRateInput;
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
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId(string $customerId)
    {
        $this->customerId = (string)$customerId;

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
     * @param CustomerGroupReference $customerGroup
     * @return $this
     */
    public function setCustomerGroup(CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }
    /**
     * @param string $anonymousId
     * @return $this
     */
    public function setAnonymousId(string $anonymousId)
    {
        $this->anonymousId = (string)$anonymousId;

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
     * @param string $taxMode
     * @return $this
     */
    public function setTaxMode(string $taxMode)
    {
        $this->taxMode = (string)$taxMode;

        return $this;
    }
    /**
     * @param string $taxRoundingMode
     * @return $this
     */
    public function setTaxRoundingMode(string $taxRoundingMode)
    {
        $this->taxRoundingMode = (string)$taxRoundingMode;

        return $this;
    }
    /**
     * @param string $taxCalculationMode
     * @return $this
     */
    public function setTaxCalculationMode(string $taxCalculationMode)
    {
        $this->taxCalculationMode = (string)$taxCalculationMode;

        return $this;
    }
    /**
     * @param LineItemDraftCollection $lineItems
     * @return $this
     */
    public function setLineItems(LineItemDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }
    /**
     * @param CustomLineItemDraftCollection $customLineItems
     * @return $this
     */
    public function setCustomLineItems(CustomLineItemDraftCollection $customLineItems)
    {
        $this->customLineItems = $customLineItems;

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
     * @param ExternalTaxRateDraft $externalTaxRateForShippingMethod
     * @return $this
     */
    public function setExternalTaxRateForShippingMethod(ExternalTaxRateDraft $externalTaxRateForShippingMethod)
    {
        $this->externalTaxRateForShippingMethod = $externalTaxRateForShippingMethod;

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
     * @param int $deleteDaysAfterLastModification
     * @return $this
     */
    public function setDeleteDaysAfterLastModification(int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = (int)$deleteDaysAfterLastModification;

        return $this;
    }
    /**
     * @param string $origin
     * @return $this
     */
    public function setOrigin(string $origin)
    {
        $this->origin = (string)$origin;

        return $this;
    }
    /**
     * @param ShippingRateInputDraft $shippingRateInput
     * @return $this
     */
    public function setShippingRateInput(ShippingRateInputDraft $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

}
