<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Cart\CustomLineItemDraftCollection;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Cart\TaxedPriceModel;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class OrderImportDraftModel extends JsonObjectModel implements OrderImportDraft
{
    
    public function __construct(
        string $shipmentState = null,
        string $country = null,
        DateTimeImmutable $completedAt = null,
        string $orderNumber = null,
        Money $totalPrice = null,
        CustomerGroupResourceIdentifier $customerGroup = null,
        TaxedPrice $taxedPrice = null,
        CustomFieldsDraft $custom = null,
        ShippingInfoImportDraft $shippingInfo = null,
        string $inventoryMode = null,
        string $orderState = null,
        string $taxRoundingMode = null,
        LineItemImportDraftCollection $lineItems = null,
        CustomLineItemDraftCollection $customLineItems = null,
        AddressCollection $itemShippingAddresses = null,
        string $customerEmail = null,
        string $customerId = null,
        Address $shippingAddress = null,
        Address $billingAddress = null,
        string $paymentState = null
    ) {
        $this->shipmentState = $shipmentState;
        $this->country = $country;
        $this->completedAt = $completedAt;
        $this->orderNumber = $orderNumber;
        $this->totalPrice = $totalPrice;
        $this->customerGroup = $customerGroup;
        $this->taxedPrice = $taxedPrice;
        $this->custom = $custom;
        $this->shippingInfo = $shippingInfo;
        $this->inventoryMode = $inventoryMode;
        $this->orderState = $orderState;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->customerEmail = $customerEmail;
        $this->customerId = $customerId;
        $this->shippingAddress = $shippingAddress;
        $this->billingAddress = $billingAddress;
        $this->paymentState = $paymentState;
        
    }

    /**
     * @var ?string
     */
    protected $shipmentState;
    
    /**
     * @var ?string
     */
    protected $country;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $completedAt;
    
    /**
     * @var ?string
     */
    protected $orderNumber;
    
    /**
     * @var ?Money
     */
    protected $totalPrice;
    
    /**
     * @var ?CustomerGroupResourceIdentifier
     */
    protected $customerGroup;
    
    /**
     * @var ?TaxedPrice
     */
    protected $taxedPrice;
    
    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?ShippingInfoImportDraft
     */
    protected $shippingInfo;
    
    /**
     * @var ?string
     */
    protected $inventoryMode;
    
    /**
     * @var ?string
     */
    protected $orderState;
    
    /**
     * @var ?string
     */
    protected $taxRoundingMode;
    
    /**
     * @var ?LineItemImportDraftCollection
     */
    protected $lineItems;
    
    /**
     * @var ?CustomLineItemDraftCollection
     */
    protected $customLineItems;
    
    /**
     * @var ?AddressCollection
     */
    protected $itemShippingAddresses;
    
    /**
     * @var ?string
     */
    protected $customerEmail;
    
    /**
     * @var ?string
     */
    protected $customerId;
    
    /**
     * @var ?Address
     */
    protected $shippingAddress;
    
    /**
     * @var ?Address
     */
    protected $billingAddress;
    
    /**
     * @var ?string
     */
    protected $paymentState;

    /**
     *
     * @return string|null
     */
    final public function getShipmentState()
    {
       if (is_null($this->shipmentState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderImportDraft::FIELD_SHIPMENT_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->shipmentState = (string)$data;
       }
       return $this->shipmentState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCountry()
    {
       if (is_null($this->country)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderImportDraft::FIELD_COUNTRY);
           if (is_null($data)) {
               return null;
           }
           $this->country = (string)$data;
       }
       return $this->country;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCompletedAt()
    {
       if (is_null($this->completedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderImportDraft::FIELD_COMPLETED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->completedAt = $data;
       }
       return $this->completedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrderNumber()
    {
       if (is_null($this->orderNumber)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderImportDraft::FIELD_ORDER_NUMBER);
           if (is_null($data)) {
               return null;
           }
           $this->orderNumber = (string)$data;
       }
       return $this->orderNumber;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getTotalPrice()
    {
       if (is_null($this->totalPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderImportDraft::FIELD_TOTAL_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->totalPrice = MoneyModel::of($data);
       }
       return $this->totalPrice;
    }
    
    /**
     *
     * @return CustomerGroupResourceIdentifier|null
     */
    final public function getCustomerGroup()
    {
       if (is_null($this->customerGroup)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderImportDraft::FIELD_CUSTOMER_GROUP);
           if (is_null($data)) {
               return null;
           }
           
           $this->customerGroup = CustomerGroupResourceIdentifierModel::of($data);
       }
       return $this->customerGroup;
    }
    
    /**
     *
     * @return TaxedPrice|null
     */
    final public function getTaxedPrice()
    {
       if (is_null($this->taxedPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderImportDraft::FIELD_TAXED_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxedPrice = TaxedPriceModel::of($data);
       }
       return $this->taxedPrice;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderImportDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsDraftModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return ShippingInfoImportDraft|null
     */
    final public function getShippingInfo()
    {
       if (is_null($this->shippingInfo)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderImportDraft::FIELD_SHIPPING_INFO);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingInfo = ShippingInfoImportDraftModel::of($data);
       }
       return $this->shippingInfo;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInventoryMode()
    {
       if (is_null($this->inventoryMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderImportDraft::FIELD_INVENTORY_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->inventoryMode = (string)$data;
       }
       return $this->inventoryMode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrderState()
    {
       if (is_null($this->orderState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderImportDraft::FIELD_ORDER_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->orderState = (string)$data;
       }
       return $this->orderState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxRoundingMode()
    {
       if (is_null($this->taxRoundingMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderImportDraft::FIELD_TAX_ROUNDING_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->taxRoundingMode = (string)$data;
       }
       return $this->taxRoundingMode;
    }
    
    /**
     *
     * @return LineItemImportDraftCollection|null
     */
    final public function getLineItems()
    {
       if (is_null($this->lineItems)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderImportDraft::FIELD_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->lineItems = LineItemImportDraftCollection::fromArray($data);
       }
       return $this->lineItems;
    }
    
    /**
     *
     * @return CustomLineItemDraftCollection|null
     */
    final public function getCustomLineItems()
    {
       if (is_null($this->customLineItems)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderImportDraft::FIELD_CUSTOM_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->customLineItems = CustomLineItemDraftCollection::fromArray($data);
       }
       return $this->customLineItems;
    }
    
    /**
     *
     * @return AddressCollection|null
     */
    final public function getItemShippingAddresses()
    {
       if (is_null($this->itemShippingAddresses)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderImportDraft::FIELD_ITEM_SHIPPING_ADDRESSES);
           if (is_null($data)) {
               return null;
           }
           $this->itemShippingAddresses = AddressCollection::fromArray($data);
       }
       return $this->itemShippingAddresses;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerEmail()
    {
       if (is_null($this->customerEmail)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderImportDraft::FIELD_CUSTOMER_EMAIL);
           if (is_null($data)) {
               return null;
           }
           $this->customerEmail = (string)$data;
       }
       return $this->customerEmail;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerId()
    {
       if (is_null($this->customerId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderImportDraft::FIELD_CUSTOMER_ID);
           if (is_null($data)) {
               return null;
           }
           $this->customerId = (string)$data;
       }
       return $this->customerId;
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getShippingAddress()
    {
       if (is_null($this->shippingAddress)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderImportDraft::FIELD_SHIPPING_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingAddress = AddressModel::of($data);
       }
       return $this->shippingAddress;
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getBillingAddress()
    {
       if (is_null($this->billingAddress)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderImportDraft::FIELD_BILLING_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           
           $this->billingAddress = AddressModel::of($data);
       }
       return $this->billingAddress;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPaymentState()
    {
       if (is_null($this->paymentState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderImportDraft::FIELD_PAYMENT_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->paymentState = (string)$data;
       }
       return $this->paymentState;
    }
    final public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }
    
    final public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
    
    final public function setCompletedAt(?DateTimeImmutable $completedAt): void
    {
        $this->completedAt = $completedAt;
    }
    
    final public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }
    
    final public function setTotalPrice(?Money $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }
    
    final public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }
    
    final public function setTaxedPrice(?TaxedPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }
    
    final public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setShippingInfo(?ShippingInfoImportDraft $shippingInfo): void
    {
        $this->shippingInfo = $shippingInfo;
    }
    
    final public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }
    
    final public function setOrderState(?string $orderState): void
    {
        $this->orderState = $orderState;
    }
    
    final public function setTaxRoundingMode(?string $taxRoundingMode): void
    {
        $this->taxRoundingMode = $taxRoundingMode;
    }
    
    final public function setLineItems(?LineItemImportDraftCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }
    
    final public function setCustomLineItems(?CustomLineItemDraftCollection $customLineItems): void
    {
        $this->customLineItems = $customLineItems;
    }
    
    final public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }
    
    final public function setCustomerEmail(?string $customerEmail): void
    {
        $this->customerEmail = $customerEmail;
    }
    
    final public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }
    
    final public function setShippingAddress(?Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }
    
    final public function setBillingAddress(?Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }
    
    final public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[OrderImportDraft::FIELD_COMPLETED_AT]) && $data[OrderImportDraft::FIELD_COMPLETED_AT] instanceof \DateTimeImmutable) {
           $data[OrderImportDraft::FIELD_COMPLETED_AT] = $data[OrderImportDraft::FIELD_COMPLETED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}