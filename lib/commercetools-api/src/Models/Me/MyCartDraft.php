<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;

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
     * <p>A three-digit currency code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCurrency();

    /**
     * @return null|string
     */
    public function getCustomerEmail();

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
     * @return null|MyLineItemDraftCollection
     */
    public function getLineItems();

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
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|string
     */
    public function getLocale();

    /**
     * <p>The <code>TaxMode</code> <code>Disabled</code> can not be set on the My Carts endpoint.</p>
     *
     * @return null|string
     */
    public function getTaxMode();

    /**
     * <p>The cart will be deleted automatically if it hasn't been modified for the specified amount of days and it is in the <code>Active</code> CartState.
     * If a ChangeSubscription for carts exists, a <code>ResourceDeleted</code> notification will be sent.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * <p>Contains addresses for orders with multiple shipping addresses.
     * Each address must contain a key which is unique in this cart.</p>
     *
     * @return null|AddressCollection
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
