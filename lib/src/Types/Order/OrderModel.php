<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Types\Cart\DiscountCodeInfoCollection;
use Commercetools\Types\Cart\CartReference;
use Commercetools\Types\Cart\ShippingRateInput;
use Commercetools\Types\Cart\DiscountCodeInfo;
use Commercetools\Builder\OrderUpdateBuilder;
use Commercetools\Types\Common\Address;
use Commercetools\Types\Cart\LineItemCollection;
use Commercetools\Types\State\StateReference;
use Commercetools\Types\Cart\ShippingInfo;
use Commercetools\Types\Cart\CustomLineItemCollection;
use Commercetools\Types\Cart\LineItem;
use Commercetools\Types\Cart\CustomLineItem;
use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\Money;
use Commercetools\Types\Cart\TaxedPrice;
use Commercetools\Types\Common\Resource;

class OrderModel extends ResourceModel implements Order {
    /**
     * @var \DateTimeImmutable
     */
    protected $completedAt;
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
     * @var string
     */
    protected $anonymousId;
    /**
     * @var LineItemCollection
     */
    protected $lineItems;
    /**
     * @var CustomLineItemCollection
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
     * @var string
     */
    protected $taxMode;
    /**
     * @var string
     */
    protected $taxRoundingMode;
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
     * @var StateReference
     */
    protected $state;
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
     * @var SyncInfoCollection
     */
    protected $syncInfo;
    /**
     * @var ReturnInfoCollection
     */
    protected $returnInfo;
    /**
     * @var DiscountCodeInfoCollection
     */
    protected $discountCodes;
    /**
     * @var int
     */
    protected $lastMessageSequenceNumber;
    /**
     * @var CartReference
     */
    protected $cart;
    /**
     * @var CustomFields
     */
    protected $custom;
    /**
     * @var PaymentInfo
     */
    protected $paymentInfo;
    /**
     * @var string
     */
    protected $locale;
    /**
     * @var string
     */
    protected $inventoryMode;
    /**
     * @var string
     */
    protected $origin;
    /**
     * @var string
     */
    protected $taxCalculationMode;
    /**
     * @var ShippingRateInput
     */
    protected $shippingRateInput;

    /**
     * @return \DateTimeImmutable
     */
    public function getCompletedAt()
    {
        if (is_null($this->completedAt)) {
            $value = $this->raw(Order::FIELD_COMPLETED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->completedAt = $value;
        }
        return $this->completedAt;
    }
    /**
     * @return string
     */
    public function getOrderNumber()
    {
        if (is_null($this->orderNumber)) {
            $value = $this->raw(Order::FIELD_ORDER_NUMBER);
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
            $value = $this->raw(Order::FIELD_CUSTOMER_ID);
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
            $value = $this->raw(Order::FIELD_CUSTOMER_EMAIL);
            $value = (string)$value;
            $this->customerEmail = $value;
        }
        return $this->customerEmail;
    }
    /**
     * @return string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            $value = $this->raw(Order::FIELD_ANONYMOUS_ID);
            $value = (string)$value;
            $this->anonymousId = $value;
        }
        return $this->anonymousId;
    }
    /**
     * @return LineItemCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            $value = $this->raw(Order::FIELD_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(LineItemCollection::class, null);
            }
            $value = $this->mapData(LineItemCollection::class, $value);
            $this->lineItems = $value;
        }
        return $this->lineItems;
    }
    /**
     * @return CustomLineItemCollection
     */
    public function getCustomLineItems()
    {
        if (is_null($this->customLineItems)) {
            $value = $this->raw(Order::FIELD_CUSTOM_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(CustomLineItemCollection::class, null);
            }
            $value = $this->mapData(CustomLineItemCollection::class, $value);
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
            $value = $this->raw(Order::FIELD_TOTAL_PRICE);
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
            $value = $this->raw(Order::FIELD_TAXED_PRICE);
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
            $value = $this->raw(Order::FIELD_SHIPPING_ADDRESS);
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
            $value = $this->raw(Order::FIELD_BILLING_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->billingAddress = $value;
        }
        return $this->billingAddress;
    }
    /**
     * @return string
     */
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            $value = $this->raw(Order::FIELD_TAX_MODE);
            $value = (string)$value;
            $this->taxMode = $value;
        }
        return $this->taxMode;
    }
    /**
     * @return string
     */
    public function getTaxRoundingMode()
    {
        if (is_null($this->taxRoundingMode)) {
            $value = $this->raw(Order::FIELD_TAX_ROUNDING_MODE);
            $value = (string)$value;
            $this->taxRoundingMode = $value;
        }
        return $this->taxRoundingMode;
    }
    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            $value = $this->raw(Order::FIELD_CUSTOMER_GROUP);
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
            $value = $this->raw(Order::FIELD_COUNTRY);
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
            $value = $this->raw(Order::FIELD_ORDER_STATE);
            $value = (string)$value;
            $this->orderState = $value;
        }
        return $this->orderState;
    }
    /**
     * @return StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(Order::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            $value = $this->raw(Order::FIELD_SHIPMENT_STATE);
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
            $value = $this->raw(Order::FIELD_PAYMENT_STATE);
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
            $value = $this->raw(Order::FIELD_SHIPPING_INFO);
            if (is_null($value)) {
                return $this->mapData(ShippingInfo::class, null);
            }
            $value = $this->mapData(ShippingInfo::class, $value);

            $this->shippingInfo = $value;
        }
        return $this->shippingInfo;
    }
    /**
     * @return SyncInfoCollection
     */
    public function getSyncInfo()
    {
        if (is_null($this->syncInfo)) {
            $value = $this->raw(Order::FIELD_SYNC_INFO);
            if (is_null($value)) {
                return $this->mapData(SyncInfoCollection::class, null);
            }
            $value = $this->mapData(SyncInfoCollection::class, $value);
            $this->syncInfo = $value;
        }
        return $this->syncInfo;
    }
    /**
     * @return ReturnInfoCollection
     */
    public function getReturnInfo()
    {
        if (is_null($this->returnInfo)) {
            $value = $this->raw(Order::FIELD_RETURN_INFO);
            if (is_null($value)) {
                return $this->mapData(ReturnInfoCollection::class, null);
            }
            $value = $this->mapData(ReturnInfoCollection::class, $value);
            $this->returnInfo = $value;
        }
        return $this->returnInfo;
    }
    /**
     * @return DiscountCodeInfoCollection
     */
    public function getDiscountCodes()
    {
        if (is_null($this->discountCodes)) {
            $value = $this->raw(Order::FIELD_DISCOUNT_CODES);
            if (is_null($value)) {
                return $this->mapData(DiscountCodeInfoCollection::class, null);
            }
            $value = $this->mapData(DiscountCodeInfoCollection::class, $value);
            $this->discountCodes = $value;
        }
        return $this->discountCodes;
    }
    /**
     * @return int
     */
    public function getLastMessageSequenceNumber()
    {
        if (is_null($this->lastMessageSequenceNumber)) {
            $value = $this->raw(Order::FIELD_LAST_MESSAGE_SEQUENCE_NUMBER);
            $value = (int)$value;
            $this->lastMessageSequenceNumber = $value;
        }
        return $this->lastMessageSequenceNumber;
    }
    /**
     * @return CartReference
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            $value = $this->raw(Order::FIELD_CART);
            if (is_null($value)) {
                return $this->mapData(CartReference::class, null);
            }
            $value = $this->mapData(CartReference::class, $value);

            $this->cart = $value;
        }
        return $this->cart;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(Order::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo()
    {
        if (is_null($this->paymentInfo)) {
            $value = $this->raw(Order::FIELD_PAYMENT_INFO);
            if (is_null($value)) {
                return $this->mapData(PaymentInfo::class, null);
            }
            $value = $this->mapData(PaymentInfo::class, $value);

            $this->paymentInfo = $value;
        }
        return $this->paymentInfo;
    }
    /**
     * @return string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            $value = $this->raw(Order::FIELD_LOCALE);
            $value = (string)$value;
            $this->locale = $value;
        }
        return $this->locale;
    }
    /**
     * @return string
     */
    public function getInventoryMode()
    {
        if (is_null($this->inventoryMode)) {
            $value = $this->raw(Order::FIELD_INVENTORY_MODE);
            $value = (string)$value;
            $this->inventoryMode = $value;
        }
        return $this->inventoryMode;
    }
    /**
     * @return string
     */
    public function getOrigin()
    {
        if (is_null($this->origin)) {
            $value = $this->raw(Order::FIELD_ORIGIN);
            $value = (string)$value;
            $this->origin = $value;
        }
        return $this->origin;
    }
    /**
     * @return string
     */
    public function getTaxCalculationMode()
    {
        if (is_null($this->taxCalculationMode)) {
            $value = $this->raw(Order::FIELD_TAX_CALCULATION_MODE);
            $value = (string)$value;
            $this->taxCalculationMode = $value;
        }
        return $this->taxCalculationMode;
    }
    /**
     * @return ShippingRateInput
     */
    public function getShippingRateInput()
    {
        if (is_null($this->shippingRateInput)) {
            $value = $this->raw(Order::FIELD_SHIPPING_RATE_INPUT);
            $resolvedClass = $this->resolveDiscriminator(ShippingRateInput::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->shippingRateInput = $value;
        }
        return $this->shippingRateInput;
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
     * @param string $anonymousId
     * @return $this
     */
    public function setAnonymousId(string $anonymousId)
    {
        $this->anonymousId = (string)$anonymousId;

        return $this;
    }
    /**
     * @param LineItemCollection $lineItems
     * @return $this
     */
    public function setLineItems(LineItemCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }
    /**
     * @param CustomLineItemCollection $customLineItems
     * @return $this
     */
    public function setCustomLineItems(CustomLineItemCollection $customLineItems)
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
     * @param string $taxMode
     * @return $this
     */
    public function setTaxMode(string $taxMode)
    {
        $this->taxMode = (string)$taxMode;

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
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state)
    {
        $this->state = $state;

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
     * @param SyncInfoCollection $syncInfo
     * @return $this
     */
    public function setSyncInfo(SyncInfoCollection $syncInfo)
    {
        $this->syncInfo = $syncInfo;

        return $this;
    }
    /**
     * @param ReturnInfoCollection $returnInfo
     * @return $this
     */
    public function setReturnInfo(ReturnInfoCollection $returnInfo)
    {
        $this->returnInfo = $returnInfo;

        return $this;
    }
    /**
     * @param DiscountCodeInfoCollection $discountCodes
     * @return $this
     */
    public function setDiscountCodes(DiscountCodeInfoCollection $discountCodes)
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }
    /**
     * @param int $lastMessageSequenceNumber
     * @return $this
     */
    public function setLastMessageSequenceNumber(int $lastMessageSequenceNumber)
    {
        $this->lastMessageSequenceNumber = (int)$lastMessageSequenceNumber;

        return $this;
    }
    /**
     * @param CartReference $cart
     * @return $this
     */
    public function setCart(CartReference $cart)
    {
        $this->cart = $cart;

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
     * @param PaymentInfo $paymentInfo
     * @return $this
     */
    public function setPaymentInfo(PaymentInfo $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }
    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale)
    {
        $this->locale = (string)$locale;

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
     * @param string $origin
     * @return $this
     */
    public function setOrigin(string $origin)
    {
        $this->origin = (string)$origin;

        return $this;
    }
    /**
     * @param string $taxCalculationMode
     * @return $this
     */
    public function setTaxCalculationMode(string $taxCalculationMode)
    {
        $this->taxCalculationMode = (string)$taxCalculationMode;

        return $this;
    }
    /**
     * @param ShippingRateInput $shippingRateInput
     * @return $this
     */
    public function setShippingRateInput(ShippingRateInput $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[Order::FIELD_COMPLETED_AT]) && $data[Order::FIELD_COMPLETED_AT] instanceof \DateTimeImmutable) {
            $data[Order::FIELD_COMPLETED_AT] = $data[Order::FIELD_COMPLETED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }

    /**
     * @return OrderUpdateBuilder
     */
    public function update()
    {
        $builder = new OrderUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
