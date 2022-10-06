<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartDraft extends JsonObject
{
    public const FIELD_CURRENCY = 'currency';
    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_BILLING_ADDRESS = 'billingAddress';
    public const FIELD_SHIPPING_METHOD = 'shippingMethod';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_STORE = 'store';
    public const FIELD_DISCOUNT_CODES = 'discountCodes';

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

     * @return null|BaseAddress
     */
    public function getShippingAddress();

    /**

     * @return null|BaseAddress
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

     * @return null|BaseAddressCollection
     */
    public function getItemShippingAddresses();

    /**
     * <p>The BusinessUnit the cart will belong to.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit();

    /**
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:Store">Store</a> by its key.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * <p>The code of existing DiscountCodes.</p>
     *

     * @return null|array
     */
    public function getDiscountCodes();

    /**
     * @param ?string $currency
     */
    public function setCurrency(?string $currency): void;

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void;

    /**
     * @param ?MyLineItemDraftCollection $lineItems
     */
    public function setLineItems(?MyLineItemDraftCollection $lineItems): void;

    /**
     * @param ?BaseAddress $shippingAddress
     */
    public function setShippingAddress(?BaseAddress $shippingAddress): void;

    /**
     * @param ?BaseAddress $billingAddress
     */
    public function setBillingAddress(?BaseAddress $billingAddress): void;

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    /**
     * @param ?BaseAddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?BaseAddressCollection $itemShippingAddresses): void;

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void;

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;

    /**
     * @param ?array $discountCodes
     */
    public function setDiscountCodes(?array $discountCodes): void;
}
