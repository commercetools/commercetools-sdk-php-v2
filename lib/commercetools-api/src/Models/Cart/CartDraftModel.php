<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierModel;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\Common\BaseAddressModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierModel;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartDraftModel extends JsonObjectModel implements CartDraft
{
    /**
     *
     * @var ?string
     */
    protected $currency;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $customerId;

    /**
     *
     * @var ?string
     */
    protected $customerEmail;

    /**
     *
     * @var ?CustomerGroupResourceIdentifier
     */
    protected $customerGroup;

    /**
     *
     * @var ?string
     */
    protected $anonymousId;

    /**
     *
     * @var ?BusinessUnitResourceIdentifier
     */
    protected $businessUnit;

    /**
     *
     * @var ?StoreResourceIdentifier
     */
    protected $store;

    /**
     *
     * @var ?LineItemDraftCollection
     */
    protected $lineItems;

    /**
     *
     * @var ?CustomLineItemDraftCollection
     */
    protected $customLineItems;

    /**
     *
     * @var ?string
     */
    protected $taxMode;

    /**
     *
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRateForShippingMethod;

    /**
     *
     * @var ?string
     */
    protected $priceRoundingMode;

    /**
     *
     * @var ?string
     */
    protected $taxRoundingMode;

    /**
     *
     * @var ?string
     */
    protected $taxCalculationMode;

    /**
     *
     * @var ?string
     */
    protected $inventoryMode;

    /**
     *
     * @var ?BaseAddress
     */
    protected $billingAddress;

    /**
     *
     * @var ?BaseAddress
     */
    protected $shippingAddress;

    /**
     *
     * @var ?ShippingMethodResourceIdentifier
     */
    protected $shippingMethod;

    /**
     *
     * @var ?ShippingRateInputDraft
     */
    protected $shippingRateInput;

    /**
     *
     * @var ?string
     */
    protected $shippingMode;

    /**
     *
     * @var ?CustomShippingDraftCollection
     */
    protected $customShipping;

    /**
     *
     * @var ?ShippingDraftCollection
     */
    protected $shipping;

    /**
     *
     * @var ?BaseAddressCollection
     */
    protected $itemShippingAddresses;

    /**
     *
     * @var ?array
     */
    protected $discountCodes;

    /**
     *
     * @var ?string
     */
    protected $country;

    /**
     *
     * @var ?string
     */
    protected $locale;

    /**
     *
     * @var ?string
     */
    protected $origin;

    /**
     *
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $currency = null,
        ?string $key = null,
        ?string $customerId = null,
        ?string $customerEmail = null,
        ?CustomerGroupResourceIdentifier $customerGroup = null,
        ?string $anonymousId = null,
        ?BusinessUnitResourceIdentifier $businessUnit = null,
        ?StoreResourceIdentifier $store = null,
        ?LineItemDraftCollection $lineItems = null,
        ?CustomLineItemDraftCollection $customLineItems = null,
        ?string $taxMode = null,
        ?ExternalTaxRateDraft $externalTaxRateForShippingMethod = null,
        ?string $priceRoundingMode = null,
        ?string $taxRoundingMode = null,
        ?string $taxCalculationMode = null,
        ?string $inventoryMode = null,
        ?BaseAddress $billingAddress = null,
        ?BaseAddress $shippingAddress = null,
        ?ShippingMethodResourceIdentifier $shippingMethod = null,
        ?ShippingRateInputDraft $shippingRateInput = null,
        ?string $shippingMode = null,
        ?CustomShippingDraftCollection $customShipping = null,
        ?ShippingDraftCollection $shipping = null,
        ?BaseAddressCollection $itemShippingAddresses = null,
        ?array $discountCodes = null,
        ?string $country = null,
        ?string $locale = null,
        ?string $origin = null,
        ?int $deleteDaysAfterLastModification = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->currency = $currency;
        $this->key = $key;
        $this->customerId = $customerId;
        $this->customerEmail = $customerEmail;
        $this->customerGroup = $customerGroup;
        $this->anonymousId = $anonymousId;
        $this->businessUnit = $businessUnit;
        $this->store = $store;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->taxMode = $taxMode;
        $this->externalTaxRateForShippingMethod = $externalTaxRateForShippingMethod;
        $this->priceRoundingMode = $priceRoundingMode;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->inventoryMode = $inventoryMode;
        $this->billingAddress = $billingAddress;
        $this->shippingAddress = $shippingAddress;
        $this->shippingMethod = $shippingMethod;
        $this->shippingRateInput = $shippingRateInput;
        $this->shippingMode = $shippingMode;
        $this->customShipping = $customShipping;
        $this->shipping = $shipping;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->discountCodes = $discountCodes;
        $this->country = $country;
        $this->locale = $locale;
        $this->origin = $origin;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->custom = $custom;
    }

    /**
     * <p>Currency the Cart uses.</p>
     *
     *
     * @return null|string
     */
    public function getCurrency()
    {
        if (is_null($this->currency)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CURRENCY);
            if (is_null($data)) {
                return null;
            }
            $this->currency = (string) $data;
        }

        return $this->currency;
    }

    /**
     * <p>User-defined unique identifier for the Cart.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> that the Cart belongs to.</p>
     *
     *
     * @return null|string
     */
    public function getCustomerId()
    {
        if (is_null($this->customerId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOMER_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customerId = (string) $data;
        }

        return $this->customerId;
    }

    /**
     * <p>Email address of the Customer that the Cart belongs to.</p>
     *
     *
     * @return null|string
     */
    public function getCustomerEmail()
    {
        if (is_null($this->customerEmail)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOMER_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->customerEmail = (string) $data;
        }

        return $this->customerEmail;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Customer Group of the Customer that the Cart belongs to. Used for <a href="/../api/pricing-and-discounts-overview#line-item-price-selection">Line Item price selection</a>.</p>
     * <p>You can set either a <code>customerId</code> or a <code>customerGroup</code>.
     * If the Customer referenced in <code>customerId</code> belongs to a Customer Group then <code>customerGroup</code> is set automatically.</p>
     *
     *
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupResourceIdentifierModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Cart.</p>
     *
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Business Unit the Cart should belong to. When the <code>customerId</code> of the Cart is also set, the <a href="ctp:api:type:Customer">Customer</a> must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit. Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects.</p>
     *
     *
     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitResourceIdentifierModel::of($data);
        }

        return $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Store the Cart should belong to. Once set, it cannot be updated.</p>
     *
     *
     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        if (is_null($this->store)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STORE);
            if (is_null($data)) {
                return null;
            }

            $this->store = StoreResourceIdentifierModel::of($data);
        }

        return $this->store;
    }

    /**
     * <p><a href="ctp:api:type:LineItems">Line Items</a> to add to the Cart.</p>
     *
     *
     * @return null|LineItemDraftCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->lineItems = LineItemDraftCollection::fromArray($data);
        }

        return $this->lineItems;
    }

    /**
     * <p><a href="ctp:api:type:CustomLineItems">Custom Line Items</a> to add to the Cart.</p>
     *
     *
     * @return null|CustomLineItemDraftCollection
     */
    public function getCustomLineItems()
    {
        if (is_null($this->customLineItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CUSTOM_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItems = CustomLineItemDraftCollection::fromArray($data);
        }

        return $this->customLineItems;
    }

    /**
     * <p>Determines how Tax Rates are set.</p>
     *
     *
     * @return null|string
     */
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TAX_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxMode = (string) $data;
        }

        return $this->taxMode;
    }

    /**
     * <p>External Tax Rate for the <code>shippingMethod</code> if the Cart has <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *
     *
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRateForShippingMethod()
    {
        if (is_null($this->externalTaxRateForShippingMethod)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TAX_RATE_FOR_SHIPPING_METHOD);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxRateForShippingMethod = ExternalTaxRateDraftModel::of($data);
        }

        return $this->externalTaxRateForShippingMethod;
    }

    /**
     * <p>Determines how the total prices on <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a> are rounded when calculated. If not set, the <a href="ctp:api:type:CartsConfiguration">default value</a> configured in the <a href="ctp:api:type:Project">Project</a> is used.</p>
     *
     *
     * @return null|string
     */
    public function getPriceRoundingMode()
    {
        if (is_null($this->priceRoundingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_ROUNDING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->priceRoundingMode = (string) $data;
        }

        return $this->priceRoundingMode;
    }

    /**
     * <p>Determines how monetary values are rounded when calculating taxes for <code>taxedPrice</code>. If not set, the <a href="ctp:api:type:CartsConfiguration">default value</a> configured in the <a href="ctp:api:type:Project">Project</a> is used.</p>
     *
     *
     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        if (is_null($this->taxRoundingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TAX_ROUNDING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxRoundingMode = (string) $data;
        }

        return $this->taxRoundingMode;
    }

    /**
     * <p>Determines how taxes are calculated for <code>taxedPrice</code>.</p>
     *
     *
     * @return null|string
     */
    public function getTaxCalculationMode()
    {
        if (is_null($this->taxCalculationMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TAX_CALCULATION_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxCalculationMode = (string) $data;
        }

        return $this->taxCalculationMode;
    }

    /**
     * <p>Determines how stock quantities are tracked for Line Items in the Cart.</p>
     *
     *
     * @return null|string
     */
    public function getInventoryMode()
    {
        if (is_null($this->inventoryMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INVENTORY_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->inventoryMode = (string) $data;
        }

        return $this->inventoryMode;
    }

    /**
     * <p>Billing address associated with the Cart.</p>
     *
     *
     * @return null|BaseAddress
     */
    public function getBillingAddress()
    {
        if (is_null($this->billingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BILLING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->billingAddress = BaseAddressModel::of($data);
        }

        return $this->billingAddress;
    }

    /**
     * <p>Shipping address for a Cart with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. Determines eligible <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> rates and Tax Rates of Line Items.
     * Must be one of the <code>itemShippingAddresses</code> when that field is also provided.</p>
     *
     *
     * @return null|BaseAddress
     */
    public function getShippingAddress()
    {
        if (is_null($this->shippingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingAddress = BaseAddressModel::of($data);
        }

        return $this->shippingAddress;
    }

    /**
     * <p>Shipping Method for a Cart with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. If the referenced <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> has a <code>predicate</code> that does not match the Cart, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned when <a href="ctp:api:endpoint:/{projectKey}/carts:POST">creating a Cart</a>.</p>
     *
     *
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod()
    {
        if (is_null($this->shippingMethod)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD);
            if (is_null($data)) {
                return null;
            }

            $this->shippingMethod = ShippingMethodResourceIdentifierModel::of($data);
        }

        return $this->shippingMethod;
    }

    /**
     * <p>Used as an input to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.
     * The data type of this field depends on the <code>shippingRateInputType.type</code> configured in the <a href="ctp:api:type:Project">Project</a>:</p>
     * <ul>
     * <li>If <code>CartClassification</code>, it must be <a href="ctp:api:type:ClassificationShippingRateInputDraft">ClassificationShippingRateInputDraft</a>.</li>
     * <li>If <code>CartScore</code>, it must be <a href="ctp:api:type:ScoreShippingRateInputDraft">ScoreShippingRateInputDraft</a>.</li>
     * <li>If <code>CartValue</code>, it cannot be set.</li>
     * </ul>
     *
     *
     * @return null|ShippingRateInputDraft
     */
    public function getShippingRateInput()
    {
        if (is_null($this->shippingRateInput)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATE_INPUT);
            if (is_null($data)) {
                return null;
            }
            $className = ShippingRateInputDraftModel::resolveDiscriminatorClass($data);
            $this->shippingRateInput = $className::of($data);
        }

        return $this->shippingRateInput;
    }

    /**
     * <ul>
     * <li>If set to <code>Single</code>, only a single Shipping Method can be added to the Cart.</li>
     * <li>If set to <code>Multiple</code>, multiple Shipping Methods can be added to the Cart.</li>
     * </ul>
     *
     *
     * @return null|string
     */
    public function getShippingMode()
    {
        if (is_null($this->shippingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMode = (string) $data;
        }

        return $this->shippingMode;
    }

    /**
     * <p>Custom Shipping Methods for a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *
     *
     * @return null|CustomShippingDraftCollection
     */
    public function getCustomShipping()
    {
        if (is_null($this->customShipping)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CUSTOM_SHIPPING);
            if (is_null($data)) {
                return null;
            }
            $this->customShipping = CustomShippingDraftCollection::fromArray($data);
        }

        return $this->customShipping;
    }

    /**
     * <p>Shipping Methods for a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *
     *
     * @return null|ShippingDraftCollection
     */
    public function getShipping()
    {
        if (is_null($this->shipping)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SHIPPING);
            if (is_null($data)) {
                return null;
            }
            $this->shipping = ShippingDraftCollection::fromArray($data);
        }

        return $this->shipping;
    }

    /**
     * <p>Multiple shipping addresses of the Cart. Each address must contain a <code>key</code> that is unique in this Cart.
     * The keys are used by <a href="ctp:api:type:LineItem">LineItems</a> to reference these addresses under their <code>shippingDetails</code>.</p>
     * <p>For Carts with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>: eligible Shipping Methods or applicable Tax Rates are determined by the address <code>shippingAddress</code>, and not <code>itemShippingAddresses</code>.</p>
     *
     *
     * @return null|BaseAddressCollection
     */
    public function getItemShippingAddresses()
    {
        if (is_null($this->itemShippingAddresses)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ITEM_SHIPPING_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->itemShippingAddresses = BaseAddressCollection::fromArray($data);
        }

        return $this->itemShippingAddresses;
    }

    /**
     * <p><code>code</code> of the existing <a href="ctp:api:type:DiscountCode">DiscountCodes</a> to add to the Cart.</p>
     *
     *
     * @return null|array
     */
    public function getDiscountCodes()
    {
        if (is_null($this->discountCodes)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_DISCOUNT_CODES);
            if (is_null($data)) {
                return null;
            }
            $this->discountCodes = $data;
        }

        return $this->discountCodes;
    }

    /**
     * <p>Used for <a href="/../api/pricing-and-discounts-overview#line-item-price-selection">Line Item price selection</a>.
     * If used for <a href="ctp:api:endpoint:/{projectKey}/in-store/carts:POST">Create Cart in Store</a>, the provided country must be one of the <a href="ctp:api:type:Store">Store's</a> <code>countries</code>.</p>
     *
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p>Language of the Cart. Must be one of the languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *
     *
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    /**
     * <p>Indicates how the Cart was created.</p>
     *
     *
     * @return null|string
     */
    public function getOrigin()
    {
        if (is_null($this->origin)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORIGIN);
            if (is_null($data)) {
                return null;
            }
            $this->origin = (string) $data;
        }

        return $this->origin;
    }

    /**
     * <p>Number of days after the last modification before a Cart is deleted.
     * If not provided, the default value for this field configured in <a href="ctp:api:type:CartsConfiguration">Project settings</a> is assigned.</p>
     * <p>Create a <a href="ctp:api:type:ChangeSubscription">ChangeSubscription</a> for Carts to receive a <a href="ctp:api:type:ResourceDeletedDeliveryPayload">ResourceDeletedDeliveryPayload</a> upon deletion of the Cart.</p>
     *
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterLastModification = (int) $data;
        }

        return $this->deleteDaysAfterLastModification;
    }

    /**
     * <p>Custom Fields for the Cart.</p>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void
    {
        $this->customerEmail = $customerEmail;
    }

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void
    {
        $this->store = $store;
    }

    /**
     * @param ?LineItemDraftCollection $lineItems
     */
    public function setLineItems(?LineItemDraftCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @param ?CustomLineItemDraftCollection $customLineItems
     */
    public function setCustomLineItems(?CustomLineItemDraftCollection $customLineItems): void
    {
        $this->customLineItems = $customLineItems;
    }

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRateForShippingMethod
     */
    public function setExternalTaxRateForShippingMethod(?ExternalTaxRateDraft $externalTaxRateForShippingMethod): void
    {
        $this->externalTaxRateForShippingMethod = $externalTaxRateForShippingMethod;
    }

    /**
     * @param ?string $priceRoundingMode
     */
    public function setPriceRoundingMode(?string $priceRoundingMode): void
    {
        $this->priceRoundingMode = $priceRoundingMode;
    }

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void
    {
        $this->taxRoundingMode = $taxRoundingMode;
    }

    /**
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void
    {
        $this->taxCalculationMode = $taxCalculationMode;
    }

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    /**
     * @param ?BaseAddress $billingAddress
     */
    public function setBillingAddress(?BaseAddress $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @param ?BaseAddress $shippingAddress
     */
    public function setShippingAddress(?BaseAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    /**
     * @param ?ShippingRateInputDraft $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }

    /**
     * @param ?string $shippingMode
     */
    public function setShippingMode(?string $shippingMode): void
    {
        $this->shippingMode = $shippingMode;
    }

    /**
     * @param ?CustomShippingDraftCollection $customShipping
     */
    public function setCustomShipping(?CustomShippingDraftCollection $customShipping): void
    {
        $this->customShipping = $customShipping;
    }

    /**
     * @param ?ShippingDraftCollection $shipping
     */
    public function setShipping(?ShippingDraftCollection $shipping): void
    {
        $this->shipping = $shipping;
    }

    /**
     * @param ?BaseAddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?BaseAddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }

    /**
     * @param ?array $discountCodes
     */
    public function setDiscountCodes(?array $discountCodes): void
    {
        $this->discountCodes = $discountCodes;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
