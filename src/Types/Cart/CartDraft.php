<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\ShippingMethod\ShippingMethodReference;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\Address;

interface CartDraft extends JsonObject {
    const FIELD_CURRENCY = 'currency';
    const FIELD_CUSTOMER_ID = 'customerId';
    const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_ANONYMOUS_ID = 'anonymousId';
    const FIELD_COUNTRY = 'country';
    const FIELD_INVENTORY_MODE = 'inventoryMode';
    const FIELD_TAX_MODE = 'taxMode';
    const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    const FIELD_BILLING_ADDRESS = 'billingAddress';
    const FIELD_SHIPPING_METHOD = 'shippingMethod';
    const FIELD_EXTERNAL_TAX_RATE_FOR_SHIPPING_METHOD = 'externalTaxRateForShippingMethod';
    const FIELD_CUSTOM = 'custom';
    const FIELD_LOCALE = 'locale';
    const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    const FIELD_ORIGIN = 'origin';
    const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';

    /**
     * @return string
     */
    public function getCurrency();

    /**
     * @return string
     */
    public function getCustomerId();

    /**
     * @return string
     */
    public function getCustomerEmail();

    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @return string
     */
    public function getAnonymousId();

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return string
     */
    public function getInventoryMode();

    /**
     * @return string
     */
    public function getTaxMode();

    /**
     * @return string
     */
    public function getTaxRoundingMode();

    /**
     * @return string
     */
    public function getTaxCalculationMode();

    /**
     * @return LineItemDraftCollection
     */
    public function getLineItems();

    /**
     * @return CustomLineItemDraftCollection
     */
    public function getCustomLineItems();

    /**
     * @return Address
     */
    public function getShippingAddress();

    /**
     * @return Address
     */
    public function getBillingAddress();

    /**
     * @return ShippingMethodReference
     */
    public function getShippingMethod();

    /**
     * @return ExternalTaxRateDraft
     */
    public function getExternalTaxRateForShippingMethod();

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return string
     */
    public function getLocale();

    /**
     * @return int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * @return string
     */
    public function getOrigin();

    /**
     * @return ShippingRateInputDraft
     */
    public function getShippingRateInput();

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency(string $currency);

    /**
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId(string $customerId);

    /**
     * @param string $customerEmail
     * @return $this
     */
    public function setCustomerEmail(string $customerEmail);

    /**
     * @param CustomerGroupReference $customerGroup
     * @return $this
     */
    public function setCustomerGroup(CustomerGroupReference $customerGroup);

    /**
     * @param string $anonymousId
     * @return $this
     */
    public function setAnonymousId(string $anonymousId);

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country);

    /**
     * @param string $inventoryMode
     * @return $this
     */
    public function setInventoryMode(string $inventoryMode);

    /**
     * @param string $taxMode
     * @return $this
     */
    public function setTaxMode(string $taxMode);

    /**
     * @param string $taxRoundingMode
     * @return $this
     */
    public function setTaxRoundingMode(string $taxRoundingMode);

    /**
     * @param string $taxCalculationMode
     * @return $this
     */
    public function setTaxCalculationMode(string $taxCalculationMode);

    /**
     * @param LineItemDraftCollection $lineItems
     * @return $this
     */
    public function setLineItems(LineItemDraftCollection $lineItems);

    /**
     * @param CustomLineItemDraftCollection $customLineItems
     * @return $this
     */
    public function setCustomLineItems(CustomLineItemDraftCollection $customLineItems);

    /**
     * @param Address $shippingAddress
     * @return $this
     */
    public function setShippingAddress(Address $shippingAddress);

    /**
     * @param Address $billingAddress
     * @return $this
     */
    public function setBillingAddress(Address $billingAddress);

    /**
     * @param ShippingMethodReference $shippingMethod
     * @return $this
     */
    public function setShippingMethod(ShippingMethodReference $shippingMethod);

    /**
     * @param ExternalTaxRateDraft $externalTaxRateForShippingMethod
     * @return $this
     */
    public function setExternalTaxRateForShippingMethod(ExternalTaxRateDraft $externalTaxRateForShippingMethod);

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom);

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale);

    /**
     * @param int $deleteDaysAfterLastModification
     * @return $this
     */
    public function setDeleteDaysAfterLastModification(int $deleteDaysAfterLastModification);

    /**
     * @param string $origin
     * @return $this
     */
    public function setOrigin(string $origin);

    /**
     * @param ShippingRateInputDraft $shippingRateInput
     * @return $this
     */
    public function setShippingRateInput(ShippingRateInputDraft $shippingRateInput);

}
