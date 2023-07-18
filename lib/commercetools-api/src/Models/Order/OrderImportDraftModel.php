<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierModel;
use Commercetools\Api\Models\Cart\TaxedPriceDraft;
use Commercetools\Api\Models\Cart\TaxedPriceDraftModel;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\Common\BaseAddressModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class OrderImportDraftModel extends JsonObjectModel implements OrderImportDraft
{
    /**
     *
     * @var ?string
     */
    protected $orderNumber;

    /**
     *
     * @var ?string
     */
    protected $purchaseOrderNumber;

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
     * @var ?LineItemImportDraftCollection
     */
    protected $lineItems;

    /**
     *
     * @var ?CustomLineItemImportDraftCollection
     */
    protected $customLineItems;

    /**
     *
     * @var ?Money
     */
    protected $totalPrice;

    /**
     *
     * @var ?TaxedPriceDraft
     */
    protected $taxedPrice;

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
     * @var ?BaseAddressCollection
     */
    protected $itemShippingAddresses;

    /**
     *
     * @var ?ShippingInfoImportDraft
     */
    protected $shippingInfo;

    /**
     *
     * @var ?PaymentInfo
     */
    protected $paymentInfo;

    /**
     *
     * @var ?string
     */
    protected $paymentState;

    /**
     *
     * @var ?string
     */
    protected $shipmentState;

    /**
     *
     * @var ?string
     */
    protected $orderState;

    /**
     *
     * @var ?StateReference
     */
    protected $state;

    /**
     *
     * @var ?string
     */
    protected $country;

    /**
     *
     * @var ?string
     */
    protected $origin;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $completedAt;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $orderNumber = null,
        ?string $purchaseOrderNumber = null,
        ?string $customerId = null,
        ?string $customerEmail = null,
        ?CustomerGroupResourceIdentifier $customerGroup = null,
        ?BusinessUnitResourceIdentifier $businessUnit = null,
        ?StoreResourceIdentifier $store = null,
        ?LineItemImportDraftCollection $lineItems = null,
        ?CustomLineItemImportDraftCollection $customLineItems = null,
        ?Money $totalPrice = null,
        ?TaxedPriceDraft $taxedPrice = null,
        ?string $taxRoundingMode = null,
        ?string $taxCalculationMode = null,
        ?string $inventoryMode = null,
        ?BaseAddress $billingAddress = null,
        ?BaseAddress $shippingAddress = null,
        ?BaseAddressCollection $itemShippingAddresses = null,
        ?ShippingInfoImportDraft $shippingInfo = null,
        ?PaymentInfo $paymentInfo = null,
        ?string $paymentState = null,
        ?string $shipmentState = null,
        ?string $orderState = null,
        ?StateReference $state = null,
        ?string $country = null,
        ?string $origin = null,
        ?DateTimeImmutable $completedAt = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->orderNumber = $orderNumber;
        $this->purchaseOrderNumber = $purchaseOrderNumber;
        $this->customerId = $customerId;
        $this->customerEmail = $customerEmail;
        $this->customerGroup = $customerGroup;
        $this->businessUnit = $businessUnit;
        $this->store = $store;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->inventoryMode = $inventoryMode;
        $this->billingAddress = $billingAddress;
        $this->shippingAddress = $shippingAddress;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->shippingInfo = $shippingInfo;
        $this->paymentInfo = $paymentInfo;
        $this->paymentState = $paymentState;
        $this->shipmentState = $shipmentState;
        $this->orderState = $orderState;
        $this->state = $state;
        $this->country = $country;
        $this->origin = $origin;
        $this->completedAt = $completedAt;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined identifier of the Order. Must be unique across a Project.
     * Once set, the value cannot be changed.</p>
     *
     *
     * @return null|string
     */
    public function getOrderNumber()
    {
        if (is_null($this->orderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->orderNumber = (string) $data;
        }

        return $this->orderNumber;
    }

    /**
     * <p>User-defined identifier for a purchase Order.</p>
     *
     *
     * @return null|string
     */
    public function getPurchaseOrderNumber()
    {
        if (is_null($this->purchaseOrderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PURCHASE_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->purchaseOrderNumber = (string) $data;
        }

        return $this->purchaseOrderNumber;
    }

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> the Order belongs to.</p>
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
     * <p>The Email address of the Customer the Order belongs to. Can be used instead of <code>customerId</code> when no check against existing <a href="ctp:api:type:Customer">Customers</a> is required.</p>
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
     * <p>The Customer Group of the Customer the Order belongs to.</p>
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
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Business Unit the Order should belong to.
     * When the <code>customerId</code> of the Order is also set, the <a href="ctp:api:type:Customer">Customer</a> must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit.</p>
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
     * <p>The Store the Order belongs to.
     * Used for <a href="#filtering">filtering</a>.</p>
     * <p>If a <a href="ctp:api:type:LineItemImportDraft">LineItemImportDraft</a> or a <a href="ctp:api:type:CustomLineItemImportDraft">CustomLineItemImportDraft</a> specifies a <code>distributionChannel</code> or a <code>supplyChannel</code> that is not defined for the referenced Store, the Order Import gets rejected.
     * The same applies when the provided <code>country</code> is not defined for the referenced Store.</p>
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
     * <p><a href="ctp:api:type:LineItems">Line Items</a> to add to the Order.</p>
     * <p>If not specified, <code>customLineItems</code> must not be empty.</p>
     *
     *
     * @return null|LineItemImportDraftCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->lineItems = LineItemImportDraftCollection::fromArray($data);
        }

        return $this->lineItems;
    }

    /**
     * <p><a href="ctp:api:type:CustomLineItems">Custom Line Items</a> to add to the Cart.</p>
     * <p>If not specified, <code>lineItems</code> must not be empty.</p>
     *
     *
     * @return null|CustomLineItemImportDraftCollection
     */
    public function getCustomLineItems()
    {
        if (is_null($this->customLineItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CUSTOM_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItems = CustomLineItemImportDraftCollection::fromArray($data);
        }

        return $this->customLineItems;
    }

    /**
     * <p>The total Price of the Order. The amount can be negative.</p>
     *
     *
     * @return null|Money
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->totalPrice = MoneyModel::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * <p>Include TaxedPrice information for the Order. If not included, and if you have Tax Rates set for Line Items and Custom Line Items, the Order total will not be recalculated.</p>
     *
     *
     * @return null|TaxedPriceDraft
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = TaxedPriceDraftModel::of($data);
        }

        return $this->taxedPrice;
    }

    /**
     * <p>Determines how monetary values are rounded when calculating taxes for <code>taxedPrice</code>.</p>
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
     * <p>Billing address associated with the Order.</p>
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
     * <p>Shipping address associated with the Order.</p>
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
     * <p>Addresses for Orders with multiple shipping addresses. Addresses must include a value for <code>key</code>.</p>
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
     * <p>Shipping-related information of the Order.</p>
     *
     *
     * @return null|ShippingInfoImportDraft
     */
    public function getShippingInfo()
    {
        if (is_null($this->shippingInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->shippingInfo = ShippingInfoImportDraftModel::of($data);
        }

        return $this->shippingInfo;
    }

    /**
     * <p>Payment information associated with the Order.</p>
     *
     *
     * @return null|PaymentInfo
     */
    public function getPaymentInfo()
    {
        if (is_null($this->paymentInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYMENT_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->paymentInfo = PaymentInfoModel::of($data);
        }

        return $this->paymentInfo;
    }

    /**
     * <p>Payment status of the Order.</p>
     *
     *
     * @return null|string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentState = (string) $data;
        }

        return $this->paymentState;
    }

    /**
     * <p>Shipment status of the Order.</p>
     *
     *
     * @return null|string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }

    /**
     * <p>Current status of the Order.</p>
     *
     *
     * @return null|string
     */
    public function getOrderState()
    {
        if (is_null($this->orderState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->orderState = (string) $data;
        }

        return $this->orderState;
    }

    /**
     * <p>State of the Order in a custom workflow.</p>
     *
     *
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>Include a value to associate a country with the Order.</p>
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
     * <p>Indicates the origin of the Order.</p>
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
     * <p>User-defined date and time for the Order. This value does not influence the <code>createdAt</code> or <code>lastModifiedAt</code> values of the Order created by the Order Import.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCompletedAt()
    {
        if (is_null($this->completedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COMPLETED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->completedAt = $data;
        }

        return $this->completedAt;
    }

    /**
     * <p>Custom Fields for the Order.</p>
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
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @param ?string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): void
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;
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
     * @param ?LineItemImportDraftCollection $lineItems
     */
    public function setLineItems(?LineItemImportDraftCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @param ?CustomLineItemImportDraftCollection $customLineItems
     */
    public function setCustomLineItems(?CustomLineItemImportDraftCollection $customLineItems): void
    {
        $this->customLineItems = $customLineItems;
    }

    /**
     * @param ?Money $totalPrice
     */
    public function setTotalPrice(?Money $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @param ?TaxedPriceDraft $taxedPrice
     */
    public function setTaxedPrice(?TaxedPriceDraft $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
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
     * @param ?BaseAddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?BaseAddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }

    /**
     * @param ?ShippingInfoImportDraft $shippingInfo
     */
    public function setShippingInfo(?ShippingInfoImportDraft $shippingInfo): void
    {
        $this->shippingInfo = $shippingInfo;
    }

    /**
     * @param ?PaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void
    {
        $this->paymentInfo = $paymentInfo;
    }

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }

    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void
    {
        $this->orderState = $orderState;
    }

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @param ?DateTimeImmutable $completedAt
     */
    public function setCompletedAt(?DateTimeImmutable $completedAt): void
    {
        $this->completedAt = $completedAt;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[OrderImportDraft::FIELD_COMPLETED_AT]) && $data[OrderImportDraft::FIELD_COMPLETED_AT] instanceof \DateTimeImmutable) {
            $data[OrderImportDraft::FIELD_COMPLETED_AT] = $data[OrderImportDraft::FIELD_COMPLETED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
