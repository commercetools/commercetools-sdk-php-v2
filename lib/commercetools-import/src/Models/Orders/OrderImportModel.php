<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\Address;
use Commercetools\Import\Models\Common\AddressCollection;
use Commercetools\Import\Models\Common\AddressModel;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReferenceModel;
use Commercetools\Import\Models\Common\CustomerKeyReference;
use Commercetools\Import\Models\Common\CustomerKeyReferenceModel;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Common\TypedMoneyModel;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomModel;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class OrderImportModel extends JsonObjectModel implements OrderImport
{
    /**
     * @var ?string
     */
    protected $orderNumber;

    /**
     * @var ?CustomerKeyReference
     */
    protected $customer;

    /**
     * @var ?string
     */
    protected $customerEmail;

    /**
     * @var ?LineItemImportDraftCollection
     */
    protected $lineItems;

    /**
     * @var ?CustomLineItemDraftCollection
     */
    protected $customLineItems;

    /**
     * @var ?TypedMoney
     */
    protected $totalPrice;

    /**
     * @var ?TaxedPrice
     */
    protected $taxedPrice;

    /**
     * @var ?Address
     */
    protected $shippingAddress;

    /**
     * @var ?Address
     */
    protected $billingAddress;

    /**
     * @var ?CustomerGroupKeyReference
     */
    protected $customerGroup;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?string
     */
    protected $orderState;

    /**
     * @var ?string
     */
    protected $shipmentState;

    /**
     * @var ?string
     */
    protected $paymentState;

    /**
     * @var ?ShippingInfoImportDraft
     */
    protected $shippingInfo;

    /**
     * @var ?DateTimeImmutable
     */
    protected $completedAt;

    /**
     * @var ?Custom
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $inventoryMode;

    /**
     * @var ?string
     */
    protected $taxRoundingMode;

    /**
     * @var ?string
     */
    protected $taxCalculationMode;

    /**
     * @var ?string
     */
    protected $origin;

    /**
     * @var ?AddressCollection
     */
    protected $itemShippingAddresses;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $orderNumber = null,
        ?CustomerKeyReference $customer = null,
        ?string $customerEmail = null,
        ?LineItemImportDraftCollection $lineItems = null,
        ?CustomLineItemDraftCollection $customLineItems = null,
        ?TypedMoney $totalPrice = null,
        ?TaxedPrice $taxedPrice = null,
        ?Address $shippingAddress = null,
        ?Address $billingAddress = null,
        ?CustomerGroupKeyReference $customerGroup = null,
        ?string $country = null,
        ?string $orderState = null,
        ?string $shipmentState = null,
        ?string $paymentState = null,
        ?ShippingInfoImportDraft $shippingInfo = null,
        ?DateTimeImmutable $completedAt = null,
        ?Custom $custom = null,
        ?string $inventoryMode = null,
        ?string $taxRoundingMode = null,
        ?string $taxCalculationMode = null,
        ?string $origin = null,
        ?AddressCollection $itemShippingAddresses = null
    ) {
        $this->orderNumber = $orderNumber;
        $this->customer = $customer;
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
        $this->shipmentState = $shipmentState;
        $this->paymentState = $paymentState;
        $this->shippingInfo = $shippingInfo;
        $this->completedAt = $completedAt;
        $this->custom = $custom;
        $this->inventoryMode = $inventoryMode;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->origin = $origin;
        $this->itemShippingAddresses = $itemShippingAddresses;
    }

    /**
     * <p>Maps to <code>Order.orderNumber</code>, String that uniquely identifies an order. It should be unique across a project. Once it's set it cannot be changed.</p>
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
     * <p>References a customer by its key.</p>
     *
     * @return null|CustomerKeyReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerKeyReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>Maps to <code>Order.customerEmail</code>.</p>
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
     * <p>Maps to <code>Order.lineItems</code>.</p>
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
     * <p>Maps to <code>Order.customLineItems</code></p>
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
     * <p>Maps to <code>Order.totalPrice</code>.</p>
     *
     * @return null|TypedMoney
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->totalPrice = $className::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * <p>Maps to <code>Order.taxedPrice</code>.</p>
     *
     * @return null|TaxedPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = TaxedPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    /**
     * <p>Maps to <code>Order.shippingAddress</code>.</p>
     *
     * @return null|Address
     */
    public function getShippingAddress()
    {
        if (is_null($this->shippingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingAddress = AddressModel::of($data);
        }

        return $this->shippingAddress;
    }

    /**
     * <p>Maps to <code>Order.billingAddress</code>.</p>
     *
     * @return null|Address
     */
    public function getBillingAddress()
    {
        if (is_null($this->billingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BILLING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->billingAddress = AddressModel::of($data);
        }

        return $this->billingAddress;
    }

    /**
     * <p>Maps to <code>Order.customerGroup</code>.</p>
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupKeyReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p>Maps to <code>Order.country</code>.</p>
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
     * <p>Maps to <code>Order.orderState</code>.</p>
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
     * <p>Maps to <code>Order.shipmentState</code>.</p>
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
     * <p>Maps to <code>Order.paymentState</code>.</p>
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
     * <p>Maps to <code>Order.shippingInfo</code>.</p>
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
     * <p>Maps to <code>Order.completedAt</code>.</p>
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
     * <p>Maps to <code>Order.custom</code>.</p>
     *
     * @return null|Custom
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>Maps to <code>Order.inventoryMode</code>.</p>
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
     * <p>Maps to <code>Order.taxRoundingMode</code>.</p>
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
     * <p>Maps to <code>Order.taxCalculationMode</code>.</p>
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
     * <p>Maps to <code>Order.origin</code>.</p>
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
     * <p>Maps to <code>Order.itemShippingAddresses</code>.</p>
     *
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses()
    {
        if (is_null($this->itemShippingAddresses)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ITEM_SHIPPING_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->itemShippingAddresses = AddressCollection::fromArray($data);
        }

        return $this->itemShippingAddresses;
    }


    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @param ?CustomerKeyReference $customer
     */
    public function setCustomer(?CustomerKeyReference $customer): void
    {
        $this->customer = $customer;
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
     * @param ?CustomLineItemDraftCollection $customLineItems
     */
    public function setCustomLineItems(?CustomLineItemDraftCollection $customLineItems): void
    {
        $this->customLineItems = $customLineItems;
    }

    /**
     * @param ?TypedMoney $totalPrice
     */
    public function setTotalPrice(?TypedMoney $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @param ?TaxedPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }

    /**
     * @param ?Address $shippingAddress
     */
    public function setShippingAddress(?Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @param ?Address $billingAddress
     */
    public function setBillingAddress(?Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @param ?CustomerGroupKeyReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void
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
     * @param ?DateTimeImmutable $completedAt
     */
    public function setCompletedAt(?DateTimeImmutable $completedAt): void
    {
        $this->completedAt = $completedAt;
    }

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void
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
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void
    {
        $this->taxCalculationMode = $taxCalculationMode;
    }

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @param ?AddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[OrderImport::FIELD_COMPLETED_AT]) && $data[OrderImport::FIELD_COMPLETED_AT] instanceof \DateTimeImmutable) {
            $data[OrderImport::FIELD_COMPLETED_AT] = $data[OrderImport::FIELD_COMPLETED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
