<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartDraft extends JsonObject
{
    public const FIELD_CURRENCY = 'currency';
    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_STORE = 'store';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_BILLING_ADDRESS = 'billingAddress';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_SHIPPING_METHOD = 'shippingMethod';
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';
    public const FIELD_SHIPPING_MODE = 'shippingMode';
    public const FIELD_DISCOUNT_CODES = 'discountCodes';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Currency the Cart uses.</p>
     *

     * @return null|string
     */
    public function getCurrency();

    /**
     * <p>Email address of the Customer the Cart belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Business Unit the Cart should belong to. The <a href="ctp:api:type:Customer">Customer</a> must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit. Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Store the Cart should belong to. Once set, it cannot be updated.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * <p><a href="ctp:api:type:LineItems">Line Items</a> to add to the Cart.</p>
     *

     * @return null|MyLineItemDraftCollection
     */
    public function getLineItems();

    /**
     * <p>Determines how Tax Rates are set. The <code>Disabled</code> TaxMode <strong>cannot</strong> be set.</p>
     *

     * @return null|string
     */
    public function getTaxMode();

    /**
     * <p>Determines how stock quantities are tracked for Line Items in the Cart.</p>
     *

     * @return null|string
     */
    public function getInventoryMode();

    /**
     * <p>Billing address associated with the Cart.</p>
     *

     * @return null|BaseAddress
     */
    public function getBillingAddress();

    /**
     * <p>Shipping address associated with the Cart. Determines eligible <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> rates and Tax Rates of Line Items.</p>
     *

     * @return null|BaseAddress
     */
    public function getShippingAddress();

    /**
     * <p>Shipping Method for the Cart. If the referenced <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> has a <code>predicate</code> that does not match the Cart, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned when <a href="ctp:api:endpoint:/{projectKey}/carts:POST">creating a Cart</a>.</p>
     *

     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod();

    /**
     * <p>Multiple shipping addresses of the Cart. Each address must contain a <code>key</code> that is unique in this Cart.
     * The keys are used by <a href="ctp:api:type:LineItem">LineItems</a> to reference these addresses under their <code>shippingDetails</code>.</p>
     * <p>Eligible Shipping Methods or applicable Tax Rates are determined by the <a href="ctp:api:type:Cart">Cart</a> <code>shippingAddress</code>, and not <code>itemShippingAddresses</code>.</p>
     *

     * @return null|BaseAddressCollection
     */
    public function getItemShippingAddresses();

    /**
     * <ul>
     * <li>If set to <code>Single</code>, only a single Shipping Method can be added to the Cart.</li>
     * <li>If set to <code>Multiple</code>, multiple Shipping Methods can be added to the Cart.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getShippingMode();

    /**
     * <p><code>code</code> of the existing <a href="ctp:api:type:DiscountCode">DiscountCodes</a> to add to the Cart.</p>
     *

     * @return null|array
     */
    public function getDiscountCodes();

    /**
     * <p>Used for <a href="/../api/pricing-and-discounts-overview#line-item-price-selection">Line Item price selection</a>.
     * If used for <a href="ctp:api:endpoint:/{projectKey}/in-store/me/carts:POST">Create Cart in Store</a>, the provided country must be one of the <a href="ctp:api:type:Store">Store's</a> <code>countries</code>.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Languages of the Cart.
     * Can only contain languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * <p>Number of days after which a Cart with <code>Active</code> <a href="ctp:api:type:CartState">CartState</a> is deleted since its last modification.
     * If not provided, the default value for this field configured in <a href="ctp:api:type:CartsConfiguration">Project settings</a> is assigned.</p>
     * <p>Create a <a href="ctp:api:type:ChangeSubscription">ChangeSubscription</a> for Carts to receive a <a href="ctp:api:type:ResourceDeletedDeliveryPayload">ResourceDeletedDeliveryPayload</a> upon deletion of the Cart.</p>
     *

     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * <p>Custom Fields for the Cart.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $currency
     */
    public function setCurrency(?string $currency): void;

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void;

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void;

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void;

    /**
     * @param ?MyLineItemDraftCollection $lineItems
     */
    public function setLineItems(?MyLineItemDraftCollection $lineItems): void;

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void;

    /**
     * @param ?BaseAddress $billingAddress
     */
    public function setBillingAddress(?BaseAddress $billingAddress): void;

    /**
     * @param ?BaseAddress $shippingAddress
     */
    public function setShippingAddress(?BaseAddress $shippingAddress): void;

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;

    /**
     * @param ?BaseAddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?BaseAddressCollection $itemShippingAddresses): void;

    /**
     * @param ?string $shippingMode
     */
    public function setShippingMode(?string $shippingMode): void;

    /**
     * @param ?array $discountCodes
     */
    public function setDiscountCodes(?array $discountCodes): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
