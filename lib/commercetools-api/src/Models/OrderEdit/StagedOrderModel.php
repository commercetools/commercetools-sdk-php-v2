<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceModel;
use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DiscountCodeInfoCollection;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingInfoModel;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\ShippingRateInputModel;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Cart\TaxedPriceModel;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderModel;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Order\PaymentInfoModel;
use Commercetools\Api\Models\Order\ReturnInfoCollection;
use Commercetools\Api\Models\Order\SyncInfoCollection;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class StagedOrderModel extends JsonObjectModel implements StagedOrder
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        string $shipmentState = null,
        string $country = null,
        string $orderNumber = null,
        Money $totalPrice = null,
        ShippingRateInput $shippingRateInput = null,
        TaxedPrice $taxedPrice = null,
        string $origin = null,
        ShippingInfo $shippingInfo = null,
        string $locale = null,
        CartReference $cart = null,
        string $inventoryMode = null,
        string $orderState = null,
        ReturnInfoCollection $returnInfo = null,
        LineItemCollection $lineItems = null,
        CustomLineItemCollection $customLineItems = null,
        AddressCollection $itemShippingAddresses = null,
        string $customerEmail = null,
        string $customerId = null,
        StateReference $state = null,
        string $paymentState = null,
        string $anonymousId = null,
        DiscountCodeInfoCollection $discountCodes = null,
        DateTimeImmutable $completedAt = null,
        CustomerGroupReference $customerGroup = null,
        CustomFields $custom = null,
        string $taxCalculationMode = null,
        StoreKeyReference $store = null,
        int $lastMessageSequenceNumber = null,
        SyncInfoCollection $syncInfo = null,
        string $taxRoundingMode = null,
        string $taxMode = null,
        Address $shippingAddress = null,
        Address $billingAddress = null,
        PaymentInfo $paymentInfo = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->shipmentState = $shipmentState;
        $this->country = $country;
        $this->orderNumber = $orderNumber;
        $this->totalPrice = $totalPrice;
        $this->shippingRateInput = $shippingRateInput;
        $this->taxedPrice = $taxedPrice;
        $this->origin = $origin;
        $this->shippingInfo = $shippingInfo;
        $this->locale = $locale;
        $this->cart = $cart;
        $this->inventoryMode = $inventoryMode;
        $this->orderState = $orderState;
        $this->returnInfo = $returnInfo;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->customerEmail = $customerEmail;
        $this->customerId = $customerId;
        $this->state = $state;
        $this->paymentState = $paymentState;
        $this->anonymousId = $anonymousId;
        $this->discountCodes = $discountCodes;
        $this->completedAt = $completedAt;
        $this->customerGroup = $customerGroup;
        $this->custom = $custom;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->store = $store;
        $this->lastMessageSequenceNumber = $lastMessageSequenceNumber;
        $this->syncInfo = $syncInfo;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->taxMode = $taxMode;
        $this->shippingAddress = $shippingAddress;
        $this->billingAddress = $billingAddress;
        $this->paymentInfo = $paymentInfo;
        
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?CreatedBy
     */
    protected $createdBy;
    
    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;
    
    /**
     * @var ?string
     */
    protected $shipmentState;
    
    /**
     * @var ?string
     */
    protected $country;
    
    /**
     * @var ?string
     */
    protected $orderNumber;
    
    /**
     * @var ?Money
     */
    protected $totalPrice;
    
    /**
     * @var ?ShippingRateInput
     */
    protected $shippingRateInput;
    
    /**
     * @var ?TaxedPrice
     */
    protected $taxedPrice;
    
    /**
     * @var ?string
     */
    protected $origin;
    
    /**
     * @var ?ShippingInfo
     */
    protected $shippingInfo;
    
    /**
     * @var ?string
     */
    protected $locale;
    
    /**
     * @var ?CartReference
     */
    protected $cart;
    
    /**
     * @var ?string
     */
    protected $inventoryMode;
    
    /**
     * @var ?string
     */
    protected $orderState;
    
    /**
     * @var ?ReturnInfoCollection
     */
    protected $returnInfo;
    
    /**
     * @var ?LineItemCollection
     */
    protected $lineItems;
    
    /**
     * @var ?CustomLineItemCollection
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
     * @var ?StateReference
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $paymentState;
    
    /**
     * @var ?string
     */
    protected $anonymousId;
    
    /**
     * @var ?DiscountCodeInfoCollection
     */
    protected $discountCodes;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $completedAt;
    
    /**
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;
    
    /**
     * @var ?CustomFields
     */
    protected $custom;
    
    /**
     * @var ?string
     */
    protected $taxCalculationMode;
    
    /**
     * @var ?StoreKeyReference
     */
    protected $store;
    
    /**
     * @var ?int
     */
    protected $lastMessageSequenceNumber;
    
    /**
     * @var ?SyncInfoCollection
     */
    protected $syncInfo;
    
    /**
     * @var ?string
     */
    protected $taxRoundingMode;
    
    /**
     * @var ?string
     */
    protected $taxMode;
    
    /**
     * @var ?Address
     */
    protected $shippingAddress;
    
    /**
     * @var ?Address
     */
    protected $billingAddress;
    
    /**
     * @var ?PaymentInfo
     */
    protected $paymentInfo;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       if (is_null($this->createdAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_CREATED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->createdAt = $data;
       }
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastModifiedAt()
    {
       if (is_null($this->lastModifiedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_LAST_MODIFIED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->lastModifiedAt = $data;
       }
       return $this->lastModifiedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       if (is_null($this->version)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(BaseResource::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    
    /**
     *
     * @return CreatedBy|null
     */
    final public function getCreatedBy()
    {
       if (is_null($this->createdBy)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LoggedResource::FIELD_CREATED_BY);
           if (is_null($data)) {
               return null;
           }
           
           $this->createdBy = CreatedByModel::of($data);
       }
       return $this->createdBy;
    }
    
    /**
     *
     * @return LastModifiedBy|null
     */
    final public function getLastModifiedBy()
    {
       if (is_null($this->lastModifiedBy)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LoggedResource::FIELD_LAST_MODIFIED_BY);
           if (is_null($data)) {
               return null;
           }
           
           $this->lastModifiedBy = LastModifiedByModel::of($data);
       }
       return $this->lastModifiedBy;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getShipmentState()
    {
       if (is_null($this->shipmentState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Order::FIELD_SHIPMENT_STATE);
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
           $data = $this->raw(Order::FIELD_COUNTRY);
           if (is_null($data)) {
               return null;
           }
           $this->country = (string)$data;
       }
       return $this->country;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrderNumber()
    {
       if (is_null($this->orderNumber)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Order::FIELD_ORDER_NUMBER);
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
           $data = $this->raw(Order::FIELD_TOTAL_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->totalPrice = MoneyModel::of($data);
       }
       return $this->totalPrice;
    }
    
    /**
     *
     * @return ShippingRateInput|null
     */
    final public function getShippingRateInput()
    {
       if (is_null($this->shippingRateInput)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Order::FIELD_SHIPPING_RATE_INPUT);
           if (is_null($data)) {
               return null;
           }
           $className = ShippingRateInputModel::resolveDiscriminatorClass($data);
           $this->shippingRateInput = $className::of($data);
       }
       return $this->shippingRateInput;
    }
    
    /**
     *
     * @return TaxedPrice|null
     */
    final public function getTaxedPrice()
    {
       if (is_null($this->taxedPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Order::FIELD_TAXED_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxedPrice = TaxedPriceModel::of($data);
       }
       return $this->taxedPrice;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrigin()
    {
       if (is_null($this->origin)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Order::FIELD_ORIGIN);
           if (is_null($data)) {
               return null;
           }
           $this->origin = (string)$data;
       }
       return $this->origin;
    }
    
    /**
     *
     * @return ShippingInfo|null
     */
    final public function getShippingInfo()
    {
       if (is_null($this->shippingInfo)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Order::FIELD_SHIPPING_INFO);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingInfo = ShippingInfoModel::of($data);
       }
       return $this->shippingInfo;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLocale()
    {
       if (is_null($this->locale)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Order::FIELD_LOCALE);
           if (is_null($data)) {
               return null;
           }
           $this->locale = (string)$data;
       }
       return $this->locale;
    }
    
    /**
     *
     * @return CartReference|null
     */
    final public function getCart()
    {
       if (is_null($this->cart)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Order::FIELD_CART);
           if (is_null($data)) {
               return null;
           }
           
           $this->cart = CartReferenceModel::of($data);
       }
       return $this->cart;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInventoryMode()
    {
       if (is_null($this->inventoryMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Order::FIELD_INVENTORY_MODE);
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
           $data = $this->raw(Order::FIELD_ORDER_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->orderState = (string)$data;
       }
       return $this->orderState;
    }
    
    /**
     *
     * @return ReturnInfoCollection|null
     */
    final public function getReturnInfo()
    {
       if (is_null($this->returnInfo)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(Order::FIELD_RETURN_INFO);
           if (is_null($data)) {
               return null;
           }
           $this->returnInfo = ReturnInfoCollection::fromArray($data);
       }
       return $this->returnInfo;
    }
    
    /**
     *
     * @return LineItemCollection|null
     */
    final public function getLineItems()
    {
       if (is_null($this->lineItems)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(Order::FIELD_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->lineItems = LineItemCollection::fromArray($data);
       }
       return $this->lineItems;
    }
    
    /**
     *
     * @return CustomLineItemCollection|null
     */
    final public function getCustomLineItems()
    {
       if (is_null($this->customLineItems)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(Order::FIELD_CUSTOM_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->customLineItems = CustomLineItemCollection::fromArray($data);
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
           $data = $this->raw(Order::FIELD_ITEM_SHIPPING_ADDRESSES);
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
           $data = $this->raw(Order::FIELD_CUSTOMER_EMAIL);
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
           $data = $this->raw(Order::FIELD_CUSTOMER_ID);
           if (is_null($data)) {
               return null;
           }
           $this->customerId = (string)$data;
       }
       return $this->customerId;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Order::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->state = StateReferenceModel::of($data);
       }
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPaymentState()
    {
       if (is_null($this->paymentState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Order::FIELD_PAYMENT_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->paymentState = (string)$data;
       }
       return $this->paymentState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAnonymousId()
    {
       if (is_null($this->anonymousId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Order::FIELD_ANONYMOUS_ID);
           if (is_null($data)) {
               return null;
           }
           $this->anonymousId = (string)$data;
       }
       return $this->anonymousId;
    }
    
    /**
     *
     * @return DiscountCodeInfoCollection|null
     */
    final public function getDiscountCodes()
    {
       if (is_null($this->discountCodes)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(Order::FIELD_DISCOUNT_CODES);
           if (is_null($data)) {
               return null;
           }
           $this->discountCodes = DiscountCodeInfoCollection::fromArray($data);
       }
       return $this->discountCodes;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCompletedAt()
    {
       if (is_null($this->completedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Order::FIELD_COMPLETED_AT);
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
     * @return CustomerGroupReference|null
     */
    final public function getCustomerGroup()
    {
       if (is_null($this->customerGroup)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Order::FIELD_CUSTOMER_GROUP);
           if (is_null($data)) {
               return null;
           }
           
           $this->customerGroup = CustomerGroupReferenceModel::of($data);
       }
       return $this->customerGroup;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Order::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxCalculationMode()
    {
       if (is_null($this->taxCalculationMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Order::FIELD_TAX_CALCULATION_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->taxCalculationMode = (string)$data;
       }
       return $this->taxCalculationMode;
    }
    
    /**
     *
     * @return StoreKeyReference|null
     */
    final public function getStore()
    {
       if (is_null($this->store)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Order::FIELD_STORE);
           if (is_null($data)) {
               return null;
           }
           
           $this->store = StoreKeyReferenceModel::of($data);
       }
       return $this->store;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getLastMessageSequenceNumber()
    {
       if (is_null($this->lastMessageSequenceNumber)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(Order::FIELD_LAST_MESSAGE_SEQUENCE_NUMBER);
           if (is_null($data)) {
               return null;
           }
           $this->lastMessageSequenceNumber = (int)$data;
       }
       return $this->lastMessageSequenceNumber;
    }
    
    /**
     *
     * @return SyncInfoCollection|null
     */
    final public function getSyncInfo()
    {
       if (is_null($this->syncInfo)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(Order::FIELD_SYNC_INFO);
           if (is_null($data)) {
               return null;
           }
           $this->syncInfo = SyncInfoCollection::fromArray($data);
       }
       return $this->syncInfo;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxRoundingMode()
    {
       if (is_null($this->taxRoundingMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Order::FIELD_TAX_ROUNDING_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->taxRoundingMode = (string)$data;
       }
       return $this->taxRoundingMode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxMode()
    {
       if (is_null($this->taxMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Order::FIELD_TAX_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->taxMode = (string)$data;
       }
       return $this->taxMode;
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getShippingAddress()
    {
       if (is_null($this->shippingAddress)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Order::FIELD_SHIPPING_ADDRESS);
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
           $data = $this->raw(Order::FIELD_BILLING_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           
           $this->billingAddress = AddressModel::of($data);
       }
       return $this->billingAddress;
    }
    
    /**
     *
     * @return PaymentInfo|null
     */
    final public function getPaymentInfo()
    {
       if (is_null($this->paymentInfo)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Order::FIELD_PAYMENT_INFO);
           if (is_null($data)) {
               return null;
           }
           
           $this->paymentInfo = PaymentInfoModel::of($data);
       }
       return $this->paymentInfo;
    }
    final public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    final public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    
    final public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }
    
    final public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }
    
    final public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }
    
    final public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
    
    final public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }
    
    final public function setTotalPrice(?Money $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }
    
    final public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }
    
    final public function setTaxedPrice(?TaxedPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }
    
    final public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }
    
    final public function setShippingInfo(?ShippingInfo $shippingInfo): void
    {
        $this->shippingInfo = $shippingInfo;
    }
    
    final public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }
    
    final public function setCart(?CartReference $cart): void
    {
        $this->cart = $cart;
    }
    
    final public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }
    
    final public function setOrderState(?string $orderState): void
    {
        $this->orderState = $orderState;
    }
    
    final public function setReturnInfo(?ReturnInfoCollection $returnInfo): void
    {
        $this->returnInfo = $returnInfo;
    }
    
    final public function setLineItems(?LineItemCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }
    
    final public function setCustomLineItems(?CustomLineItemCollection $customLineItems): void
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
    
    final public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }
    
    final public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }
    
    final public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }
    
    final public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void
    {
        $this->discountCodes = $discountCodes;
    }
    
    final public function setCompletedAt(?DateTimeImmutable $completedAt): void
    {
        $this->completedAt = $completedAt;
    }
    
    final public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }
    
    final public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setTaxCalculationMode(?string $taxCalculationMode): void
    {
        $this->taxCalculationMode = $taxCalculationMode;
    }
    
    final public function setStore(?StoreKeyReference $store): void
    {
        $this->store = $store;
    }
    
    final public function setLastMessageSequenceNumber(?int $lastMessageSequenceNumber): void
    {
        $this->lastMessageSequenceNumber = $lastMessageSequenceNumber;
    }
    
    final public function setSyncInfo(?SyncInfoCollection $syncInfo): void
    {
        $this->syncInfo = $syncInfo;
    }
    
    final public function setTaxRoundingMode(?string $taxRoundingMode): void
    {
        $this->taxRoundingMode = $taxRoundingMode;
    }
    
    final public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }
    
    final public function setShippingAddress(?Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }
    
    final public function setBillingAddress(?Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }
    
    final public function setPaymentInfo(?PaymentInfo $paymentInfo): void
    {
        $this->paymentInfo = $paymentInfo;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[Order::FIELD_COMPLETED_AT]) && $data[Order::FIELD_COMPLETED_AT] instanceof \DateTimeImmutable) {
           $data[Order::FIELD_COMPLETED_AT] = $data[Order::FIELD_COMPLETED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}