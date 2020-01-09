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
     * <p>A three-digit currency code as per <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     * @return null|string
     */
    public function getCurrency();

    /**
     * <p>Id of an existing Customer.</p>
     *
     * @return null|string
     */
    public function getCustomerId();

    /**
     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p>Will be set automatically when the <code>customerId</code> is set and the customer is a member of a customer group.
     * Can be set explicitly when no <code>customerId</code> is present.</p>
     *
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * <p>Assigns the new cart to an anonymous session (the customer has not signed up/in yet).</p>
     *
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p>Assigns the new cart to the store.
     * The store assignment can not be modified.</p>
     *
     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Default inventory mode is <code>None</code>.</p>
     *
     * @return null|string
     */
    public function getInventoryMode();

    /**
     * <p>The default tax mode is <code>Platform</code>.</p>
     *
     * @return null|string
     */
    public function getTaxMode();

    /**
     * <p>The default tax rounding mode is <code>HalfEven</code>.</p>
     *
     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * <p>The default tax calculation mode is <code>LineItemLevel</code>.</p>
     *
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
     * <p>The shipping address is used to determine the eligible shipping methods and rates as well as the tax rate of the line items.</p>
     *
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
     * <p>An external tax rate can be set for the <code>shippingMethod</code> if the cart has the <code>External</code> TaxMode.</p>
     *
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRateForShippingMethod();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Must be one of the languages supported for this project</p>
     *
     * @return null|string
     */
    public function getLocale();

    /**
     * <p>The cart will be deleted automatically if it hasn't been modified for the specified amount of days and it is in the <code>Active</code> CartState.
     * If a ChangeSubscription for carts exists, a <code>ResourceDeleted</code> notification will be sent.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * <p>The default origin is <code>Customer</code>.</p>
     *
     * @return null|string
     */
    public function getOrigin();

    /**
     * <p>The shippingRateInput is used as an input to select a ShippingRatePriceTier.
     * Based on the definition of ShippingRateInputType.
     * If CartClassification is defined, it must be ClassificationShippingRateInput.
     * If CartScore is defined, it must be ScoreShippingRateInput.
     * Otherwise it can not bet set.</p>
     *
     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput();

    /**
     * <p>Contains addresses for carts with multiple shipping addresses.
     * Each address must contain a key which is unique in this cart.
     * Line items will use these keys to reference the addresses under their <code>shippingDetails</code>.
     * The addresses captured here are not used to determine eligible shipping methods or the applicable tax rate.
     * Only the cart's <code>shippingAddress</code> is used for this.</p>
     *
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
