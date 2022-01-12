<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

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
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class StagedOrderModel extends JsonObjectModel implements StagedOrder
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?DateTimeImmutable
     */
    protected $completedAt;

    /**
     * @var ?string
     */
    protected $orderNumber;

    /**
     * @var ?string
     */
    protected $customerId;

    /**
     * @var ?string
     */
    protected $customerEmail;

    /**
     * @var ?string
     */
    protected $anonymousId;

    /**
     * @var ?StoreKeyReference
     */
    protected $store;

    /**
     * @var ?LineItemCollection
     */
    protected $lineItems;

    /**
     * @var ?CustomLineItemCollection
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
     * @var ?string
     */
    protected $taxMode;

    /**
     * @var ?string
     */
    protected $taxRoundingMode;

    /**
     * @var ?CustomerGroupReference
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
     * @var ?StateReference
     */
    protected $state;

    /**
     * @var ?string
     */
    protected $shipmentState;

    /**
     * @var ?string
     */
    protected $paymentState;

    /**
     * @var ?ShippingInfo
     */
    protected $shippingInfo;

    /**
     * @var ?SyncInfoCollection
     */
    protected $syncInfo;

    /**
     * @var ?ReturnInfoCollection
     */
    protected $returnInfo;

    /**
     * @var ?DiscountCodeInfoCollection
     */
    protected $discountCodes;

    /**
     * @var ?int
     */
    protected $lastMessageSequenceNumber;

    /**
     * @var ?CartReference
     */
    protected $cart;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?PaymentInfo
     */
    protected $paymentInfo;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?string
     */
    protected $inventoryMode;

    /**
     * @var ?string
     */
    protected $origin;

    /**
     * @var ?string
     */
    protected $taxCalculationMode;

    /**
     * @var ?ShippingRateInput
     */
    protected $shippingRateInput;

    /**
     * @var ?AddressCollection
     */
    protected $itemShippingAddresses;

    /**
     * @var ?CartDiscountReferenceCollection
     */
    protected $refusedGifts;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null,
        ?DateTimeImmutable $completedAt = null,
        ?string $orderNumber = null,
        ?string $customerId = null,
        ?string $customerEmail = null,
        ?string $anonymousId = null,
        ?StoreKeyReference $store = null,
        ?LineItemCollection $lineItems = null,
        ?CustomLineItemCollection $customLineItems = null,
        ?TypedMoney $totalPrice = null,
        ?TaxedPrice $taxedPrice = null,
        ?Address $shippingAddress = null,
        ?Address $billingAddress = null,
        ?string $taxMode = null,
        ?string $taxRoundingMode = null,
        ?CustomerGroupReference $customerGroup = null,
        ?string $country = null,
        ?string $orderState = null,
        ?StateReference $state = null,
        ?string $shipmentState = null,
        ?string $paymentState = null,
        ?ShippingInfo $shippingInfo = null,
        ?SyncInfoCollection $syncInfo = null,
        ?ReturnInfoCollection $returnInfo = null,
        ?DiscountCodeInfoCollection $discountCodes = null,
        ?int $lastMessageSequenceNumber = null,
        ?CartReference $cart = null,
        ?CustomFields $custom = null,
        ?PaymentInfo $paymentInfo = null,
        ?string $locale = null,
        ?string $inventoryMode = null,
        ?string $origin = null,
        ?string $taxCalculationMode = null,
        ?ShippingRateInput $shippingRateInput = null,
        ?AddressCollection $itemShippingAddresses = null,
        ?CartDiscountReferenceCollection $refusedGifts = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->completedAt = $completedAt;
        $this->orderNumber = $orderNumber;
        $this->customerId = $customerId;
        $this->customerEmail = $customerEmail;
        $this->anonymousId = $anonymousId;
        $this->store = $store;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->shippingAddress = $shippingAddress;
        $this->billingAddress = $billingAddress;
        $this->taxMode = $taxMode;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->customerGroup = $customerGroup;
        $this->country = $country;
        $this->orderState = $orderState;
        $this->state = $state;
        $this->shipmentState = $shipmentState;
        $this->paymentState = $paymentState;
        $this->shippingInfo = $shippingInfo;
        $this->syncInfo = $syncInfo;
        $this->returnInfo = $returnInfo;
        $this->discountCodes = $discountCodes;
        $this->lastMessageSequenceNumber = $lastMessageSequenceNumber;
        $this->cart = $cart;
        $this->custom = $custom;
        $this->paymentInfo = $paymentInfo;
        $this->locale = $locale;
        $this->inventoryMode = $inventoryMode;
        $this->origin = $origin;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->shippingRateInput = $shippingRateInput;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->refusedGifts = $refusedGifts;
    }

    /**
     * <p>The unique ID of the order.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>The current version of the order.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>This field will only be present if it was set for Order Import</p>
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
     * <p>String that uniquely identifies an order.
     * It can be used to create more human-readable (in contrast to ID) identifier for the order.
     * It should be unique across a project.
     * Once it's set it cannot be changed.</p>
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
     * <p>Identifies carts and orders belonging to an anonymous session (the customer has not signed up/in yet).</p>
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
     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        if (is_null($this->store)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STORE);
            if (is_null($data)) {
                return null;
            }

            $this->store = StoreKeyReferenceModel::of($data);
        }

        return $this->store;
    }

    /**
     * @return null|LineItemCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->lineItems = LineItemCollection::fromArray($data);
        }

        return $this->lineItems;
    }

    /**
     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems()
    {
        if (is_null($this->customLineItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CUSTOM_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItems = CustomLineItemCollection::fromArray($data);
        }

        return $this->customLineItems;
    }

    /**
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
     * <p>The taxes are calculated based on the shipping address.</p>
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
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for rouding.</p>
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
     * <p>Set when the customer is set and the customer is a member of a customer group.
     * Used for product variant price selection.</p>
     *
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.
     * Used for product variant price selection.</p>
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
     * <p>One of the four predefined OrderStates.</p>
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
     * @return null|ShippingInfo
     */
    public function getShippingInfo()
    {
        if (is_null($this->shippingInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->shippingInfo = ShippingInfoModel::of($data);
        }

        return $this->shippingInfo;
    }

    /**
     * @return null|SyncInfoCollection
     */
    public function getSyncInfo()
    {
        if (is_null($this->syncInfo)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SYNC_INFO);
            if (is_null($data)) {
                return null;
            }
            $this->syncInfo = SyncInfoCollection::fromArray($data);
        }

        return $this->syncInfo;
    }

    /**
     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo()
    {
        if (is_null($this->returnInfo)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RETURN_INFO);
            if (is_null($data)) {
                return null;
            }
            $this->returnInfo = ReturnInfoCollection::fromArray($data);
        }

        return $this->returnInfo;
    }

    /**
     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes()
    {
        if (is_null($this->discountCodes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DISCOUNT_CODES);
            if (is_null($data)) {
                return null;
            }
            $this->discountCodes = DiscountCodeInfoCollection::fromArray($data);
        }

        return $this->discountCodes;
    }

    /**
     * <p>The sequence number of the last order message produced by changes to this order.
     * <code>0</code> means, that no messages were created yet.</p>
     *
     * @return null|int
     */
    public function getLastMessageSequenceNumber()
    {
        if (is_null($this->lastMessageSequenceNumber)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LAST_MESSAGE_SEQUENCE_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->lastMessageSequenceNumber = (int) $data;
        }

        return $this->lastMessageSequenceNumber;
    }

    /**
     * <p>Set when this order was created from a cart.
     * The cart will have the state <code>Ordered</code>.</p>
     *
     * @return null|CartReference
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CART);
            if (is_null($data)) {
                return null;
            }

            $this->cart = CartReferenceModel::of($data);
        }

        return $this->cart;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
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
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for calculating the price with LineItemLevel (horizontally) or UnitPriceLevel (vertically) calculation mode.</p>
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
     * <p>The shippingRateInput is used as an input to select a ShippingRatePriceTier.</p>
     *
     * @return null|ShippingRateInput
     */
    public function getShippingRateInput()
    {
        if (is_null($this->shippingRateInput)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATE_INPUT);
            if (is_null($data)) {
                return null;
            }
            $className = ShippingRateInputModel::resolveDiscriminatorClass($data);
            $this->shippingRateInput = $className::of($data);
        }

        return $this->shippingRateInput;
    }

    /**
     * <p>Contains addresses for orders with multiple shipping addresses.</p>
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
     * <p>Automatically filled when a line item with LineItemMode <code>GiftLineItem</code> is removed from this order.</p>
     *
     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts()
    {
        if (is_null($this->refusedGifts)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REFUSED_GIFTS);
            if (is_null($data)) {
                return null;
            }
            $this->refusedGifts = CartDiscountReferenceCollection::fromArray($data);
        }

        return $this->refusedGifts;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param ?DateTimeImmutable $completedAt
     */
    public function setCompletedAt(?DateTimeImmutable $completedAt): void
    {
        $this->completedAt = $completedAt;
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
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void
    {
        $this->store = $store;
    }

    /**
     * @param ?LineItemCollection $lineItems
     */
    public function setLineItems(?LineItemCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @param ?CustomLineItemCollection $customLineItems
     */
    public function setCustomLineItems(?CustomLineItemCollection $customLineItems): void
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
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
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
     * @param ?ShippingInfo $shippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo): void
    {
        $this->shippingInfo = $shippingInfo;
    }

    /**
     * @param ?SyncInfoCollection $syncInfo
     */
    public function setSyncInfo(?SyncInfoCollection $syncInfo): void
    {
        $this->syncInfo = $syncInfo;
    }

    /**
     * @param ?ReturnInfoCollection $returnInfo
     */
    public function setReturnInfo(?ReturnInfoCollection $returnInfo): void
    {
        $this->returnInfo = $returnInfo;
    }

    /**
     * @param ?DiscountCodeInfoCollection $discountCodes
     */
    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void
    {
        $this->discountCodes = $discountCodes;
    }

    /**
     * @param ?int $lastMessageSequenceNumber
     */
    public function setLastMessageSequenceNumber(?int $lastMessageSequenceNumber): void
    {
        $this->lastMessageSequenceNumber = $lastMessageSequenceNumber;
    }

    /**
     * @param ?CartReference $cart
     */
    public function setCart(?CartReference $cart): void
    {
        $this->cart = $cart;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?PaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void
    {
        $this->paymentInfo = $paymentInfo;
    }

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void
    {
        $this->taxCalculationMode = $taxCalculationMode;
    }

    /**
     * @param ?ShippingRateInput $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }

    /**
     * @param ?AddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }

    /**
     * @param ?CartDiscountReferenceCollection $refusedGifts
     */
    public function setRefusedGifts(?CartDiscountReferenceCollection $refusedGifts): void
    {
        $this->refusedGifts = $refusedGifts;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Order::FIELD_CREATED_AT]) && $data[Order::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Order::FIELD_CREATED_AT] = $data[Order::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Order::FIELD_LAST_MODIFIED_AT]) && $data[Order::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Order::FIELD_LAST_MODIFIED_AT] = $data[Order::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Order::FIELD_COMPLETED_AT]) && $data[Order::FIELD_COMPLETED_AT] instanceof \DateTimeImmutable) {
            $data[Order::FIELD_COMPLETED_AT] = $data[Order::FIELD_COMPLETED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
