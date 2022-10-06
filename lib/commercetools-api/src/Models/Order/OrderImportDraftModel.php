<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierModel;
use Commercetools\Api\Models\Cart\CustomLineItemImportDraftCollection;
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
    protected $customerId;

    /**
     *
     * @var ?string
     */
    protected $customerEmail;

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
     * @var ?BaseAddress
     */
    protected $shippingAddress;

    /**
     *
     * @var ?BaseAddress
     */
    protected $billingAddress;

    /**
     *
     * @var ?CustomerGroupResourceIdentifier
     */
    protected $customerGroup;

    /**
     *
     * @var ?string
     */
    protected $country;

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
    protected $shipmentState;

    /**
     *
     * @var ?string
     */
    protected $paymentState;

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
     * @var ?DateTimeImmutable
     */
    protected $completedAt;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     *
     * @var ?string
     */
    protected $inventoryMode;

    /**
     *
     * @var ?string
     */
    protected $taxRoundingMode;

    /**
     *
     * @var ?BaseAddressCollection
     */
    protected $itemShippingAddresses;

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
     * @var ?string
     */
    protected $origin;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $orderNumber = null,
        ?string $customerId = null,
        ?string $customerEmail = null,
        ?LineItemImportDraftCollection $lineItems = null,
        ?CustomLineItemImportDraftCollection $customLineItems = null,
        ?Money $totalPrice = null,
        ?TaxedPriceDraft $taxedPrice = null,
        ?BaseAddress $shippingAddress = null,
        ?BaseAddress $billingAddress = null,
        ?CustomerGroupResourceIdentifier $customerGroup = null,
        ?string $country = null,
        ?string $orderState = null,
        ?StateReference $state = null,
        ?string $shipmentState = null,
        ?string $paymentState = null,
        ?ShippingInfoImportDraft $shippingInfo = null,
        ?PaymentInfo $paymentInfo = null,
        ?DateTimeImmutable $completedAt = null,
        ?CustomFieldsDraft $custom = null,
        ?string $inventoryMode = null,
        ?string $taxRoundingMode = null,
        ?BaseAddressCollection $itemShippingAddresses = null,
        ?BusinessUnitResourceIdentifier $businessUnit = null,
        ?StoreResourceIdentifier $store = null,
        ?string $origin = null
    ) {
        $this->orderNumber = $orderNumber;
        $this->customerId = $customerId;
        $this->customerEmail = $customerEmail;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->shippingAddress = $shippingAddress;
        $this->billingAddress = $billingAddress;
        $this->customerGroup = $customerGroup;
        $this->country = $country;
        $this->orderState = $orderState;
        $this->state = $state;
        $this->shipmentState = $shipmentState;
        $this->paymentState = $paymentState;
        $this->shippingInfo = $shippingInfo;
        $this->paymentInfo = $paymentInfo;
        $this->completedAt = $completedAt;
        $this->custom = $custom;
        $this->inventoryMode = $inventoryMode;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->businessUnit = $businessUnit;
        $this->store = $store;
        $this->origin = $origin;
    }

    /**
     * <p>String that unique identifies an order.
     * It can be used to create more human-readable (in contrast to ID) identifier for the order.
     * It should be unique within a project.</p>
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
     * <p>If given the customer with that ID must exist in the project.</p>
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
     * <p>The customer email can be used when no check against existing Customers is desired during order import.</p>
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
     * <p>If not given <code>customLineItems</code> must not be empty.</p>
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
     * <p>If not given <code>lineItems</code> must not be empty.</p>
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
     * <p>Order Import does not support calculation of taxes.
     * When setting the draft the taxedPrice is to be provided.</p>
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
     * <p>Set when the customer is set and the customer is a member of a customer group.
     * Used for product variant price selection.</p>
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
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.
     * Used for product variant price selection.</p>
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
     * <p>If not given the <code>Open</code> state will be assigned by default.</p>
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
     * <p>This reference can point to a state in a custom workflow.</p>
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
     * <p>Set if the ShippingMethod is set.</p>
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
     * <p>The custom fields.</p>
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
     * <p>If not given the mode <code>None</code> will be assigned by default.</p>
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
     * <p>If not given the tax rounding mode <code>HalfEven</code> will be assigned by default.</p>
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
     * <p>Contains addresses for orders with multiple shipping addresses.</p>
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
     * <p>The Business Unit the Cart belongs to.</p>
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
     * <p>The default origin is <code>Customer</code>.</p>
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
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
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
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
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
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
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

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void
    {
        $this->taxRoundingMode = $taxRoundingMode;
    }

    /**
     * @param ?BaseAddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?BaseAddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
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
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
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
