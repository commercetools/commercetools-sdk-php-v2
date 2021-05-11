<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

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
     * @var ?string
     */
    protected $currency;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $customerId;

    /**
     * @var ?string
     */
    protected $customerEmail;

    /**
     * @var ?CustomerGroupResourceIdentifier
     */
    protected $customerGroup;

    /**
     * @var ?string
     */
    protected $anonymousId;

    /**
     * @var ?StoreResourceIdentifier
     */
    protected $store;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?string
     */
    protected $inventoryMode;

    /**
     * @var ?string
     */
    protected $taxMode;

    /**
     * @var ?string
     */
    protected $taxRoundingMode;

    /**
     * @var ?string
     */
    protected $taxCalculationMode;

    /**
     * @var ?LineItemDraftCollection
     */
    protected $lineItems;

    /**
     * @var ?CustomLineItemDraftCollection
     */
    protected $customLineItems;

    /**
     * @var ?BaseAddress
     */
    protected $shippingAddress;

    /**
     * @var ?BaseAddress
     */
    protected $billingAddress;

    /**
     * @var ?ShippingMethodResourceIdentifier
     */
    protected $shippingMethod;

    /**
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRateForShippingMethod;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    /**
     * @var ?string
     */
    protected $origin;

    /**
     * @var ?ShippingRateInputDraft
     */
    protected $shippingRateInput;

    /**
     * @var ?BaseAddressCollection
     */
    protected $itemShippingAddresses;

    /**
     * @var ?array
     */
    protected $discountCodes;


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
        ?StoreResourceIdentifier $store = null,
        ?string $country = null,
        ?string $inventoryMode = null,
        ?string $taxMode = null,
        ?string $taxRoundingMode = null,
        ?string $taxCalculationMode = null,
        ?LineItemDraftCollection $lineItems = null,
        ?CustomLineItemDraftCollection $customLineItems = null,
        ?BaseAddress $shippingAddress = null,
        ?BaseAddress $billingAddress = null,
        ?ShippingMethodResourceIdentifier $shippingMethod = null,
        ?ExternalTaxRateDraft $externalTaxRateForShippingMethod = null,
        ?CustomFieldsDraft $custom = null,
        ?string $locale = null,
        ?int $deleteDaysAfterLastModification = null,
        ?string $origin = null,
        ?ShippingRateInputDraft $shippingRateInput = null,
        ?BaseAddressCollection $itemShippingAddresses = null,
        ?array $discountCodes = null
    ) {
        $this->currency = $currency;
        $this->key = $key;
        $this->customerId = $customerId;
        $this->customerEmail = $customerEmail;
        $this->customerGroup = $customerGroup;
        $this->anonymousId = $anonymousId;
        $this->store = $store;
        $this->country = $country;
        $this->inventoryMode = $inventoryMode;
        $this->taxMode = $taxMode;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->shippingAddress = $shippingAddress;
        $this->billingAddress = $billingAddress;
        $this->shippingMethod = $shippingMethod;
        $this->externalTaxRateForShippingMethod = $externalTaxRateForShippingMethod;
        $this->custom = $custom;
        $this->locale = $locale;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->origin = $origin;
        $this->shippingRateInput = $shippingRateInput;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->discountCodes = $discountCodes;
    }

    /**
     * <p>A three-digit currency code as per <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
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
     * <p>User-specific unique identifier of the cart.</p>
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
     * <p>Id of an existing Customer.</p>
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
     * <p>Will be set automatically when the <code>customerId</code> is set and the customer is a member of a customer group.
     * Can be set explicitly when no <code>customerId</code> is present.</p>
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
     * <p>Assigns the new cart to an anonymous session (the customer has not signed up/in yet).</p>
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
     * <p>Assigns the new cart to the store.
     * The store assignment can not be modified.</p>
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
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
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
     * <p>Default inventory mode is <code>None</code>.</p>
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
     * <p>The default tax mode is <code>Platform</code>.</p>
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
     * <p>The default tax rounding mode is <code>HalfEven</code>.</p>
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
     * <p>The default tax calculation mode is <code>LineItemLevel</code>.</p>
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
     * <p>The shipping address is used to determine the eligible shipping methods and rates as well as the tax rate of the line items.</p>
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
     * <p>An external tax rate can be set for the <code>shippingMethod</code> if the cart has the <code>External</code> TaxMode.</p>
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
     * <p>The custom fields.</p>
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
     * <p>Must be one of the languages supported for this project</p>
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
     * <p>The cart will be deleted automatically if it hasn't been modified for the specified amount of days and it is in the <code>Active</code> CartState.
     * If a ChangeSubscription for carts exists, a <code>ResourceDeleted</code> notification will be sent.</p>
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
     * <p>The default origin is <code>Customer</code>.</p>
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
     * <p>The shippingRateInput is used as an input to select a ShippingRatePriceTier.
     * Based on the definition of ShippingRateInputType.
     * If CartClassification is defined, it must be ClassificationShippingRateInput.
     * If CartScore is defined, it must be ScoreShippingRateInput.
     * Otherwise it can not bet set.</p>
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

            $this->shippingRateInput = ShippingRateInputDraftModel::of($data);
        }

        return $this->shippingRateInput;
    }

    /**
     * <p>Contains addresses for carts with multiple shipping addresses.
     * Each address must contain a key which is unique in this cart.
     * Line items will use these keys to reference the addresses under their <code>shippingDetails</code>.
     * The addresses captured here are not used to determine eligible shipping methods or the applicable tax rate.
     * Only the cart's <code>shippingAddress</code> is used for this.</p>
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
     * <p>The code of existing DiscountCodes.</p>
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
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void
    {
        $this->store = $store;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
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
     * @param ?BaseAddress $shippingAddress
     */
    public function setShippingAddress(?BaseAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @param ?BaseAddress $billingAddress
     */
    public function setBillingAddress(?BaseAddress $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRateForShippingMethod
     */
    public function setExternalTaxRateForShippingMethod(?ExternalTaxRateDraft $externalTaxRateForShippingMethod): void
    {
        $this->externalTaxRateForShippingMethod = $externalTaxRateForShippingMethod;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @param ?ShippingRateInputDraft $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
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
}
