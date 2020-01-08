<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceBuilder;
use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DiscountCodeInfoCollection;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingInfoBuilder;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\ShippingRateInputBuilder;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Cart\TaxedPriceBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<Order>
 */
final class OrderBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var LastModifiedBy|?LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**
     * @var CreatedBy|?CreatedByBuilder
     */
    private $createdBy;

    /**
     * @var ?DateTimeImmutable
     */
    private $completedAt;

    /**
     * @var ?string
     */
    private $orderNumber;

    /**
     * @var ?string
     */
    private $customerId;

    /**
     * @var ?string
     */
    private $customerEmail;

    /**
     * @var ?string
     */
    private $anonymousId;

    /**
     * @var StoreKeyReference|?StoreKeyReferenceBuilder
     */
    private $store;

    /**
     * @var ?LineItemCollection
     */
    private $lineItems;

    /**
     * @var ?CustomLineItemCollection
     */
    private $customLineItems;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $totalPrice;

    /**
     * @var TaxedPrice|?TaxedPriceBuilder
     */
    private $taxedPrice;

    /**
     * @var Address|?AddressBuilder
     */
    private $shippingAddress;

    /**
     * @var Address|?AddressBuilder
     */
    private $billingAddress;

    /**
     * @var ?string
     */
    private $taxMode;

    /**
     * @var ?string
     */
    private $taxRoundingMode;

    /**
     * @var CustomerGroupReference|?CustomerGroupReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var ?string
     */
    private $country;

    /**
     * @var ?string
     */
    private $orderState;

    /**
     * @var StateReference|?StateReferenceBuilder
     */
    private $state;

    /**
     * @var ?string
     */
    private $shipmentState;

    /**
     * @var ?string
     */
    private $paymentState;

    /**
     * @var ShippingInfo|?ShippingInfoBuilder
     */
    private $shippingInfo;

    /**
     * @var ?SyncInfoCollection
     */
    private $syncInfo;

    /**
     * @var ?ReturnInfoCollection
     */
    private $returnInfo;

    /**
     * @var ?DiscountCodeInfoCollection
     */
    private $discountCodes;

    /**
     * @var ?int
     */
    private $lastMessageSequenceNumber;

    /**
     * @var CartReference|?CartReferenceBuilder
     */
    private $cart;

    /**
     * @var CustomFields|?CustomFieldsBuilder
     */
    private $custom;

    /**
     * @var PaymentInfo|?PaymentInfoBuilder
     */
    private $paymentInfo;

    /**
     * @var ?string
     */
    private $locale;

    /**
     * @var ?string
     */
    private $inventoryMode;

    /**
     * @var ?string
     */
    private $origin;

    /**
     * @var ?string
     */
    private $taxCalculationMode;

    /**
     * @var ShippingRateInput|?ShippingRateInputBuilder
     */
    private $shippingRateInput;

    /**
     * @var ?AddressCollection
     */
    private $itemShippingAddresses;

    /**
     * @var ?CartDiscountReferenceCollection
     */
    private $refusedGifts;

    /**
     * <p>The unique ID of the order.</p>.
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The current version of the order.</p>.
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>This field will only be present if it was set for Order Import</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    /**
     * <p>String that uniquely identifies an order.
     * It can be used to create more human-readable (in contrast to ID) identifier for the order.
     * It should be unique across a project.
     * Once it's set it cannot be changed.</p>.
     *
     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @return null|string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @return null|string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * <p>Identifies carts and orders belonging to an anonymous session (the customer has not signed up/in yet).</p>.
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        return $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store;
    }

    /**
     * @return null|LineItemCollection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems()
    {
        return $this->customLineItems;
    }

    /**
     * @return null|TypedMoney
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * <p>The taxes are calculated based on the shipping address.</p>.
     *
     * @return null|TaxedPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
    }

    /**
     * @return null|Address
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress;
    }

    /**
     * @return null|Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress;
    }

    /**
     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for rouding.</p>.
     *
     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        return $this->taxRoundingMode;
    }

    /**
     * <p>Set when the customer is set and the customer is a member of a customer group.
     * Used for product variant price selection.</p>.
     *
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.
     * Used for product variant price selection.</p>.
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>One of the four predefined OrderStates.</p>.
     *
     * @return null|string
     */
    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * <p>This reference can point to a state in a custom workflow.</p>.
     *
     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * @return null|string
     */
    public function getShipmentState()
    {
        return $this->shipmentState;
    }

    /**
     * @return null|string
     */
    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * <p>Set if the ShippingMethod is set.</p>.
     *
     * @return null|ShippingInfo
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo;
    }

    /**
     * @return null|SyncInfoCollection
     */
    public function getSyncInfo()
    {
        return $this->syncInfo;
    }

    /**
     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo()
    {
        return $this->returnInfo;
    }

    /**
     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes()
    {
        return $this->discountCodes;
    }

    /**
     * <p>The sequence number of the last order message produced by changes to this order.
     * <code>0</code> means, that no messages were created yet.</p>.
     *
     * @return null|int
     */
    public function getLastMessageSequenceNumber()
    {
        return $this->lastMessageSequenceNumber;
    }

    /**
     * <p>Set when this order was created from a cart.
     * The cart will have the state <code>Ordered</code>.</p>.
     *
     * @return null|CartReference
     */
    public function getCart()
    {
        return $this->cart instanceof CartReferenceBuilder ? $this->cart->build() : $this->cart;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return null|PaymentInfo
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo instanceof PaymentInfoBuilder ? $this->paymentInfo->build() : $this->paymentInfo;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return null|string
     */
    public function getInventoryMode()
    {
        return $this->inventoryMode;
    }

    /**
     * @return null|string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for calculating the price with LineItemLevel (horizontally) or UnitPriceLevel (vertically) calculation mode.</p>.
     *
     * @return null|string
     */
    public function getTaxCalculationMode()
    {
        return $this->taxCalculationMode;
    }

    /**
     * <p>The shippingRateInput is used as an input to select a ShippingRatePriceTier.</p>.
     *
     * @return null|ShippingRateInput
     */
    public function getShippingRateInput()
    {
        return $this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput;
    }

    /**
     * <p>Contains addresses for orders with multiple shipping addresses.</p>.
     *
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses()
    {
        return $this->itemShippingAddresses;
    }

    /**
     * <p>Automatically filled when a line item with LineItemMode <code>GiftLineItem</code> is removed from this order.</p>.
     *
     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts()
    {
        return $this->refusedGifts;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCompletedAt(?DateTimeImmutable $completedAt)
    {
        $this->completedAt = $completedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerId(?string $customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerEmail(?string $customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStore(?StoreKeyReference $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLineItems(?LineItemCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomLineItems(?CustomLineItemCollection $customLineItems)
    {
        $this->customLineItems = $customLineItems;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalPrice(?TypedMoney $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxedPrice(?TaxedPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingAddress(?Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withBillingAddress(?Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxRoundingMode(?string $taxRoundingMode)
    {
        $this->taxRoundingMode = $taxRoundingMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOrderState(?string $orderState)
    {
        $this->orderState = $orderState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingInfo(?ShippingInfo $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSyncInfo(?SyncInfoCollection $syncInfo)
    {
        $this->syncInfo = $syncInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withReturnInfo(?ReturnInfoCollection $returnInfo)
    {
        $this->returnInfo = $returnInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountCodes(?DiscountCodeInfoCollection $discountCodes)
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastMessageSequenceNumber(?int $lastMessageSequenceNumber)
    {
        $this->lastMessageSequenceNumber = $lastMessageSequenceNumber;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCart(?CartReference $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPaymentInfo(?PaymentInfo $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInventoryMode(?string $inventoryMode)
    {
        $this->inventoryMode = $inventoryMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOrigin(?string $origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCalculationMode(?string $taxCalculationMode)
    {
        $this->taxCalculationMode = $taxCalculationMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateInput(?ShippingRateInput $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @return $this
     */
    public function withItemShippingAddresses(?AddressCollection $itemShippingAddresses)
    {
        $this->itemShippingAddresses = $itemShippingAddresses;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRefusedGifts(?CartDiscountReferenceCollection $refusedGifts)
    {
        $this->refusedGifts = $refusedGifts;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStoreBuilder(?StoreKeyReferenceBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalPriceBuilder(?TypedMoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxedPriceBuilder(?TaxedPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingAddressBuilder(?AddressBuilder $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withBillingAddressBuilder(?AddressBuilder $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingInfoBuilder(?ShippingInfoBuilder $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCartBuilder(?CartReferenceBuilder $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPaymentInfoBuilder(?PaymentInfoBuilder $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateInputBuilder(?ShippingRateInputBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    public function build(): Order
    {
        return new OrderModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            $this->completedAt,
            $this->orderNumber,
            $this->customerId,
            $this->customerEmail,
            $this->anonymousId,
            ($this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store),
            $this->lineItems,
            $this->customLineItems,
            ($this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice),
            ($this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice),
            ($this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress),
            ($this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress),
            $this->taxMode,
            $this->taxRoundingMode,
            ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            $this->country,
            $this->orderState,
            ($this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state),
            $this->shipmentState,
            $this->paymentState,
            ($this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo),
            $this->syncInfo,
            $this->returnInfo,
            $this->discountCodes,
            $this->lastMessageSequenceNumber,
            ($this->cart instanceof CartReferenceBuilder ? $this->cart->build() : $this->cart),
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            ($this->paymentInfo instanceof PaymentInfoBuilder ? $this->paymentInfo->build() : $this->paymentInfo),
            $this->locale,
            $this->inventoryMode,
            $this->origin,
            $this->taxCalculationMode,
            ($this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput),
            $this->itemShippingAddresses,
            $this->refusedGifts
        );
    }

    public static function of(): OrderBuilder
    {
        return new self();
    }
}
