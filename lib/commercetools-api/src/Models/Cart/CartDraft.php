<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;

interface CartDraft extends JsonObject
{
    const FIELD_CURRENCY = 'currency';
    const FIELD_CUSTOMER_ID = 'customerId';
    const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_ANONYMOUS_ID = 'anonymousId';
    const FIELD_STORE = 'store';
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
    const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>.
     *
     * @return null|string
     */
    public function getCurrency();

    /**
     * @return null|string
     */
    public function getCustomerId();

    /**
     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * @return null|string
     */
    public function getCountry();

    /**
     * @return null|string
     */
    public function getInventoryMode();

    /**
     * @return null|string
     */
    public function getTaxMode();

    /**
     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * @return null|LineItemDraftCollection
     */
    public function getLineItems();

    /**
     * @return null|CustomLineItemDraftCollection
     */
    public function getCustomLineItems();

    /**
     * @return null|Address
     */
    public function getShippingAddress();

    /**
     * @return null|Address
     */
    public function getBillingAddress();

    /**
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod();

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRateForShippingMethod();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|string
     */
    public function getLocale();

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * @return null|string
     */
    public function getOrigin();

    /**
     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput();

    /**
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses();

    public function setCurrency(?string $currency): void;

    public function setCustomerId(?string $customerId): void;

    public function setCustomerEmail(?string $customerEmail): void;

    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;

    public function setAnonymousId(?string $anonymousId): void;

    public function setStore(?StoreResourceIdentifier $store): void;

    public function setCountry(?string $country): void;

    public function setInventoryMode(?string $inventoryMode): void;

    public function setTaxMode(?string $taxMode): void;

    public function setTaxRoundingMode(?string $taxRoundingMode): void;

    public function setTaxCalculationMode(?string $taxCalculationMode): void;

    public function setLineItems(?LineItemDraftCollection $lineItems): void;

    public function setCustomLineItems(?CustomLineItemDraftCollection $customLineItems): void;

    public function setShippingAddress(?Address $shippingAddress): void;

    public function setBillingAddress(?Address $billingAddress): void;

    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;

    public function setExternalTaxRateForShippingMethod(?ExternalTaxRateDraft $externalTaxRateForShippingMethod): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setLocale(?string $locale): void;

    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    public function setOrigin(?string $origin): void;

    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void;

    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;
}
