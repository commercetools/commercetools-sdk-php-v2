<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface MyCartDraft extends JsonObject
{
    
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
    const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     * @return string|null
     */
    public function getCurrency();
    
    /**
     *
     * @return string|null
     */
    public function getCustomerEmail();
    
    /**
     *
     * @return string|null
     */
    public function getCountry();
    
    /**
     *
     * @return string|null
     */
    public function getInventoryMode();
    
    /**
     *
     * @return MyLineItemDraftCollection|null
     */
    public function getLineItems();
    
    /**
     *
     * @return Address|null
     */
    public function getShippingAddress();
    
    /**
     *
     * @return Address|null
     */
    public function getBillingAddress();
    
    /**
     *
     * @return ShippingMethodResourceIdentifier|null
     */
    public function getShippingMethod();
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return string|null
     */
    public function getLocale();
    
    /**
     *
     * @return string|null
     */
    public function getTaxMode();
    
    /**
     *
     * @return int|null
     */
    public function getDeleteDaysAfterLastModification();
    
    /**
     *
     * @return AddressCollection|null
     */
    public function getItemShippingAddresses();
    public function setCurrency(?string $currency): void;
    
    public function setCustomerEmail(?string $customerEmail): void;
    
    public function setCountry(?string $country): void;
    
    public function setInventoryMode(?string $inventoryMode): void;
    
    public function setLineItems(?MyLineItemDraftCollection $lineItems): void;
    
    public function setShippingAddress(?Address $shippingAddress): void;
    
    public function setBillingAddress(?Address $billingAddress): void;
    
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;
    
    public function setCustom(?CustomFieldsDraft $custom): void;
    
    public function setLocale(?string $locale): void;
    
    public function setTaxMode(?string $taxMode): void;
    
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;
    
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;
}