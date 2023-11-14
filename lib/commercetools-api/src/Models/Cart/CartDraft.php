<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDraft extends JsonObject
{
    public const FIELD_CURRENCY = 'currency';
    public const FIELD_KEY = 'key';
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_STORE = 'store';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_EXTERNAL_TAX_RATE_FOR_SHIPPING_METHOD = 'externalTaxRateForShippingMethod';
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_BILLING_ADDRESS = 'billingAddress';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_SHIPPING_METHOD = 'shippingMethod';
    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    public const FIELD_SHIPPING_MODE = 'shippingMode';
    public const FIELD_CUSTOM_SHIPPING = 'customShipping';
    public const FIELD_SHIPPING = 'shipping';
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';
    public const FIELD_DISCOUNT_CODES = 'discountCodes';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Currency the Cart uses.</p>
     *

     * @return null|string
     */
    public function getCurrency();

    /**
     * <p>User-defined unique identifier for the Cart.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> that the Cart belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerId();

    /**
     * <p>Email address of the Customer that the Cart belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Customer Group of the Customer that the Cart belongs to. Used for <a href="ctp:api:type:LineItemPriceSelection">LineItem Price selection</a>.</p>
     * <p>It is automatically set if the Customer referenced in <code>customerId</code> belongs to a Customer Group.
     * It can also be set explicitly when no <code>customerId</code> is present.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Cart.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Business Unit the Cart should belong to. When the <code>customerId</code> of the Cart is also set, the <a href="ctp:api:type:Customer">Customer</a> must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit.</p>
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

     * @return null|LineItemDraftCollection
     */
    public function getLineItems();

    /**
     * <p><a href="ctp:api:type:CustomLineItems">Custom Line Items</a> to add to the Cart.</p>
     *

     * @return null|CustomLineItemDraftCollection
     */
    public function getCustomLineItems();

    /**
     * <p>Determines how Tax Rates are set.</p>
     *

     * @return null|string
     */
    public function getTaxMode();

    /**
     * <p>External Tax Rate for the <code>shippingMethod</code> if the Cart has <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRateForShippingMethod();

    /**
     * <p>Determines how monetary values are rounded when calculating taxes for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * <p>Determines how taxes are calculated for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxCalculationMode();

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
     * <p>Shipping address for a Cart with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. Determines eligible <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> rates and Tax Rates of Line Items.</p>
     *

     * @return null|BaseAddress
     */
    public function getShippingAddress();

    /**
     * <p>Shipping Method for a Cart with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. If the referenced <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> has a <code>predicate</code> that does not match the Cart, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned when <a href="ctp:api:endpoint:/{projectKey}/carts:POST">creating a Cart</a>.</p>
     *

     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod();

    /**
     * <p>Used as an input to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.
     * The data type of this field depends on the <code>shippingRateInputType.type</code> configured in the <a href="ctp:api:type:Project">Project</a>:</p>
     * <ul>
     * <li>If <code>CartClassification</code>, it must be <a href="ctp:api:type:ClassificationShippingRateInputDraft">ClassificationShippingRateInputDraft</a>.</li>
     * <li>If <code>CartScore</code>, it must be <a href="ctp:api:type:ScoreShippingRateInputDraft">ScoreShippingRateInputDraft</a>.</li>
     * <li>If <code>CartValue</code>, it cannot be set.</li>
     * </ul>
     *

     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput();

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
     * <p>Custom Shipping Methods for a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|CustomShippingDraftCollection
     */
    public function getCustomShipping();

    /**
     * <p>Shipping Methods for a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|ShippingDraftCollection
     */
    public function getShipping();

    /**
     * <p>Multiple shipping addresses of the Cart. Each address must contain a <code>key</code> that is unique in this Cart.
     * The keys are used by <a href="ctp:api:type:LineItem">LineItems</a> to reference these addresses under their <code>shippingDetails</code>.</p>
     * <p>For Carts with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>: eligible Shipping Methods or applicable Tax Rates are determined by the address <code>shippingAddress</code>, and not <code>itemShippingAddresses</code>.</p>
     *

     * @return null|BaseAddressCollection
     */
    public function getItemShippingAddresses();

    /**
     * <p><code>code</code> of the existing <a href="ctp:api:type:DiscountCode">DiscountCodes</a> to add to the Cart.</p>
     *

     * @return null|array
     */
    public function getDiscountCodes();

    /**
     * <p>Used for <a href="ctp:api:type:LineItemPriceSelection">LineItem Price selection</a>.
     * If used for <a href="ctp:api:endpoint:/{projectKey}/in-store/carts:POST">Create Cart in Store</a>, the provided country must be one of the <a href="ctp:api:type:Store">Store's</a> <code>countries</code>.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Languages of the Cart. Can only contain languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * <p>Indicates how the Cart was created.</p>
     *

     * @return null|string
     */
    public function getOrigin();

    /**
     * <p>Number of days after which an active Cart is deleted since its last modification.
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
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void;

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void;

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void;

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void;

    /**
     * @param ?LineItemDraftCollection $lineItems
     */
    public function setLineItems(?LineItemDraftCollection $lineItems): void;

    /**
     * @param ?CustomLineItemDraftCollection $customLineItems
     */
    public function setCustomLineItems(?CustomLineItemDraftCollection $customLineItems): void;

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRateForShippingMethod
     */
    public function setExternalTaxRateForShippingMethod(?ExternalTaxRateDraft $externalTaxRateForShippingMethod): void;

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void;

    /**
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void;

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
     * @param ?ShippingRateInputDraft $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void;

    /**
     * @param ?string $shippingMode
     */
    public function setShippingMode(?string $shippingMode): void;

    /**
     * @param ?CustomShippingDraftCollection $customShipping
     */
    public function setCustomShipping(?CustomShippingDraftCollection $customShipping): void;

    /**
     * @param ?ShippingDraftCollection $shipping
     */
    public function setShipping(?ShippingDraftCollection $shipping): void;

    /**
     * @param ?BaseAddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?BaseAddressCollection $itemShippingAddresses): void;

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
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void;

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
