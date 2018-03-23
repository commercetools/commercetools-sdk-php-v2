<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\JsonObject;

use Commercetools\Types\ShippingMethod\ShippingMethodReference;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\Address;

interface MyCartDraft extends JsonObject {
    const FIELD_CURRENCY = 'currency';
    const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    const FIELD_COUNTRY = 'country';
    const FIELD_INVENTORY_MODE = 'inventoryMode';
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    const FIELD_BILLING_ADDRESS = 'billingAddress';
    const FIELD_SHIPPING_METHOD = 'shippingMethod';
    const FIELD_CUSTOM = 'custom';
    const FIELD_LOCALE = 'locale';
    const FIELD_TAX_MODE = 'taxMode';
    const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';

    /**
     * @return string
     */
    public function getCurrency();

    /**
     * @return string
     */
    public function getCustomerEmail();

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return string
     */
    public function getInventoryMode();

    /**
     * @return MyLineItemDraftCollection
     */
    public function getLineItems();

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
     * @return CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return string
     */
    public function getLocale();

    /**
     * @return string
     */
    public function getTaxMode();

    /**
     * @return int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency(string $currency);

    /**
     * @param string $customerEmail
     * @return $this
     */
    public function setCustomerEmail(string $customerEmail);

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
     * @param MyLineItemDraftCollection $lineItems
     * @return $this
     */
    public function setLineItems(MyLineItemDraftCollection $lineItems);

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
     * @param string $taxMode
     * @return $this
     */
    public function setTaxMode(string $taxMode);

    /**
     * @param int $deleteDaysAfterLastModification
     * @return $this
     */
    public function setDeleteDaysAfterLastModification(int $deleteDaysAfterLastModification);

}
