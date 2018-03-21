<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Cart\CustomLineItemDraft;
use Commercetools\Types\Cart\ShippingInfo;
use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Cart\CustomLineItemDraftCollection;
use Commercetools\Types\Common\Money;
use Commercetools\Types\Cart\TaxedPrice;
use Commercetools\Types\Common\Address;

class OrderImportDraftModel extends JsonObjectModel implements OrderImportDraft {
    /**
     * @var string
     */
    protected $orderNumber;
    /**
     * @var string
     */
    protected $customerId;
    /**
     * @var string
     */
    protected $customerEmail;
    /**
     * @var LineItemImportDraftCollection
     */
    protected $lineItems;
    /**
     * @var CustomLineItemDraftCollection
     */
    protected $customLineItems;
    /**
     * @var Money
     */
    protected $totalPrice;
    /**
     * @var TaxedPrice
     */
    protected $taxedPrice;
    /**
     * @var Address
     */
    protected $shippingAddress;
    /**
     * @var Address
     */
    protected $billingAddress;
    /**
     * @var CustomerGroupReference
     */
    protected $customerGroup;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $orderState;
    /**
     * @var string
     */
    protected $shipmentState;
    /**
     * @var string
     */
    protected $paymentState;
    /**
     * @var ShippingInfo
     */
    protected $shippingInfo;
    /**
     * @var \DateTimeImmutable
     */
    protected $completedAt;
    /**
     * @var CustomFields
     */
    protected $custom;
    /**
     * @var string
     */
    protected $inventoryMode;
    /**
     * @var string
     */
    protected $taxRoundingMode;

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        if (is_null($this->orderNumber)) {
            $value = $this->raw(OrderImportDraft::FIELD_ORDER_NUMBER);
            $value = (string)$value;
            $this->orderNumber = $value;
        }
        return $this->orderNumber;
    }
    /**
     * @return string
     */
    public function getCustomerId()
    {
        if (is_null($this->customerId)) {
            $value = $this->raw(OrderImportDraft::FIELD_CUSTOMER_ID);
            $value = (string)$value;
            $this->customerId = $value;
        }
        return $this->customerId;
    }
    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        if (is_null($this->customerEmail)) {
            $value = $this->raw(OrderImportDraft::FIELD_CUSTOMER_EMAIL);
            $value = (string)$value;
            $this->customerEmail = $value;
        }
        return $this->customerEmail;
    }
    /**
     * @return LineItemImportDraftCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            $value = $this->raw(OrderImportDraft::FIELD_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(LineItemImportDraftCollection::class, null);
            }
            $value = $this->mapData(LineItemImportDraftCollection::class, $value);
            $this->lineItems = $value;
        }
        return $this->lineItems;
    }
    /**
     * @return CustomLineItemDraftCollection
     */
    public function getCustomLineItems()
    {
        if (is_null($this->customLineItems)) {
            $value = $this->raw(OrderImportDraft::FIELD_CUSTOM_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(CustomLineItemDraftCollection::class, null);
            }
            $value = $this->mapData(CustomLineItemDraftCollection::class, $value);
            $this->customLineItems = $value;
        }
        return $this->customLineItems;
    }
    /**
     * @return Money
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            $value = $this->raw(OrderImportDraft::FIELD_TOTAL_PRICE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->totalPrice = $value;
        }
        return $this->totalPrice;
    }
    /**
     * @return TaxedPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            $value = $this->raw(OrderImportDraft::FIELD_TAXED_PRICE);
            if (is_null($value)) {
                return $this->mapData(TaxedPrice::class, null);
            }
            $value = $this->mapData(TaxedPrice::class, $value);

            $this->taxedPrice = $value;
        }
        return $this->taxedPrice;
    }
    /**
     * @return Address
     */
    public function getShippingAddress()
    {
        if (is_null($this->shippingAddress)) {
            $value = $this->raw(OrderImportDraft::FIELD_SHIPPING_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->shippingAddress = $value;
        }
        return $this->shippingAddress;
    }
    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        if (is_null($this->billingAddress)) {
            $value = $this->raw(OrderImportDraft::FIELD_BILLING_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->billingAddress = $value;
        }
        return $this->billingAddress;
    }
    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            $value = $this->raw(OrderImportDraft::FIELD_CUSTOMER_GROUP);
            if (is_null($value)) {
                return $this->mapData(CustomerGroupReference::class, null);
            }
            $value = $this->mapData(CustomerGroupReference::class, $value);

            $this->customerGroup = $value;
        }
        return $this->customerGroup;
    }
    /**
     * @return string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            $value = $this->raw(OrderImportDraft::FIELD_COUNTRY);
            $value = (string)$value;
            $this->country = $value;
        }
        return $this->country;
    }
    /**
     * @return string
     */
    public function getOrderState()
    {
        if (is_null($this->orderState)) {
            $value = $this->raw(OrderImportDraft::FIELD_ORDER_STATE);
            $value = (string)$value;
            $this->orderState = $value;
        }
        return $this->orderState;
    }
    /**
     * @return string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            $value = $this->raw(OrderImportDraft::FIELD_SHIPMENT_STATE);
            $value = (string)$value;
            $this->shipmentState = $value;
        }
        return $this->shipmentState;
    }
    /**
     * @return string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            $value = $this->raw(OrderImportDraft::FIELD_PAYMENT_STATE);
            $value = (string)$value;
            $this->paymentState = $value;
        }
        return $this->paymentState;
    }
    /**
     * @return ShippingInfo
     */
    public function getShippingInfo()
    {
        if (is_null($this->shippingInfo)) {
            $value = $this->raw(OrderImportDraft::FIELD_SHIPPING_INFO);
            if (is_null($value)) {
                return $this->mapData(ShippingInfo::class, null);
            }
            $value = $this->mapData(ShippingInfo::class, $value);

            $this->shippingInfo = $value;
        }
        return $this->shippingInfo;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getCompletedAt()
    {
        if (is_null($this->completedAt)) {
            $value = $this->raw(OrderImportDraft::FIELD_COMPLETED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->completedAt = $value;
        }
        return $this->completedAt;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(OrderImportDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return string
     */
    public function getInventoryMode()
    {
        if (is_null($this->inventoryMode)) {
            $value = $this->raw(OrderImportDraft::FIELD_INVENTORY_MODE);
            $value = (string)$value;
            $this->inventoryMode = $value;
        }
        return $this->inventoryMode;
    }
    /**
     * @return string
     */
    public function getTaxRoundingMode()
    {
        if (is_null($this->taxRoundingMode)) {
            $value = $this->raw(OrderImportDraft::FIELD_TAX_ROUNDING_MODE);
            $value = (string)$value;
            $this->taxRoundingMode = $value;
        }
        return $this->taxRoundingMode;
    }

    /**
     * @param string $orderNumber
     * @return $this
     */
    public function setOrderNumber(string $orderNumber)
    {
        $this->orderNumber = (string)$orderNumber;

        return $this;
    }
    /**
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId(string $customerId)
    {
        $this->customerId = (string)$customerId;

        return $this;
    }
    /**
     * @param string $customerEmail
     * @return $this
     */
    public function setCustomerEmail(string $customerEmail)
    {
        $this->customerEmail = (string)$customerEmail;

        return $this;
    }
    /**
     * @param LineItemImportDraftCollection $lineItems
     * @return $this
     */
    public function setLineItems(LineItemImportDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }
    /**
     * @param CustomLineItemDraftCollection $customLineItems
     * @return $this
     */
    public function setCustomLineItems(CustomLineItemDraftCollection $customLineItems)
    {
        $this->customLineItems = $customLineItems;

        return $this;
    }
    /**
     * @param Money $totalPrice
     * @return $this
     */
    public function setTotalPrice(Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }
    /**
     * @param TaxedPrice $taxedPrice
     * @return $this
     */
    public function setTaxedPrice(TaxedPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }
    /**
     * @param Address $shippingAddress
     * @return $this
     */
    public function setShippingAddress(Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }
    /**
     * @param Address $billingAddress
     * @return $this
     */
    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }
    /**
     * @param CustomerGroupReference $customerGroup
     * @return $this
     */
    public function setCustomerGroup(CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }
    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->country = (string)$country;

        return $this;
    }
    /**
     * @param string $orderState
     * @return $this
     */
    public function setOrderState(string $orderState)
    {
        $this->orderState = (string)$orderState;

        return $this;
    }
    /**
     * @param string $shipmentState
     * @return $this
     */
    public function setShipmentState(string $shipmentState)
    {
        $this->shipmentState = (string)$shipmentState;

        return $this;
    }
    /**
     * @param string $paymentState
     * @return $this
     */
    public function setPaymentState(string $paymentState)
    {
        $this->paymentState = (string)$paymentState;

        return $this;
    }
    /**
     * @param ShippingInfo $shippingInfo
     * @return $this
     */
    public function setShippingInfo(ShippingInfo $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $completedAt
     * @return $this
     */
    public function setCompletedAt($completedAt)
    {
        if ($completedAt instanceof \DateTime) {
            $completedAt = \DateTimeImmutable::createFromMutable($completedAt);
        }
        if (!$completedAt instanceof \DateTimeImmutable) {
            $completedAt = new \DateTimeImmutable($completedAt);
        }
        $this->$completedAt = $completedAt;

        return $this;
    }
    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }
    /**
     * @param string $inventoryMode
     * @return $this
     */
    public function setInventoryMode(string $inventoryMode)
    {
        $this->inventoryMode = (string)$inventoryMode;

        return $this;
    }
    /**
     * @param string $taxRoundingMode
     * @return $this
     */
    public function setTaxRoundingMode(string $taxRoundingMode)
    {
        $this->taxRoundingMode = (string)$taxRoundingMode;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[OrderImportDraft::FIELD_COMPLETED_AT]) && $data[OrderImportDraft::FIELD_COMPLETED_AT] instanceof \DateTimeImmutable) {
            $data[OrderImportDraft::FIELD_COMPLETED_AT] = $data[OrderImportDraft::FIELD_COMPLETED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
