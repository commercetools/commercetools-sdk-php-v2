<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Cart\CustomLineItemDraftCollection;
use Commercetools\Api\Models\Cart\TaxedPriceDraft;
use Commercetools\Api\Models\Cart\TaxedPriceDraftBuilder;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<OrderImportDraft>
 */
final class OrderImportDraftBuilder implements Builder
{
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
     * @var ?LineItemImportDraftCollection
     */
    private $lineItems;

    /**
     * @var ?CustomLineItemDraftCollection
     */
    private $customLineItems;

    /**
     * @var null|Money|MoneyBuilder
     */
    private $totalPrice;

    /**
     * @var null|TaxedPriceDraft|TaxedPriceDraftBuilder
     */
    private $taxedPrice;

    /**
     * @var null|Address|AddressBuilder
     */
    private $shippingAddress;

    /**
     * @var null|Address|AddressBuilder
     */
    private $billingAddress;

    /**
     * @var null|CustomerGroupResourceIdentifier|CustomerGroupResourceIdentifierBuilder
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
     * @var ?string
     */
    private $shipmentState;

    /**
     * @var ?string
     */
    private $paymentState;

    /**
     * @var null|ShippingInfoImportDraft|ShippingInfoImportDraftBuilder
     */
    private $shippingInfo;

    /**
     * @var ?DateTimeImmutable
     */
    private $completedAt;

    /**
     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * @var ?string
     */
    private $inventoryMode;

    /**
     * @var ?string
     */
    private $taxRoundingMode;

    /**
     * @var ?AddressCollection
     */
    private $itemShippingAddresses;

    /**
     * @var null|StoreResourceIdentifier|StoreResourceIdentifierBuilder
     */
    private $store;

    /**
     * @var ?string
     */
    private $origin;

    /**
     * <p>String that unique identifies an order.
     * It can be used to create more human-readable (in contrast to ID) identifier for the order.
     * It should be unique within a project.</p>
     *
     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * <p>If given the customer with that ID must exist in the project.</p>
     *
     * @return null|string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * <p>The customer email can be used when no check against existing Customers is desired during order import.</p>
     *
     * @return null|string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * <p>If not given <code>customLineItems</code> must not be empty.</p>
     *
     * @return null|LineItemImportDraftCollection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * <p>If not given <code>lineItems</code> must not be empty.</p>
     *
     * @return null|CustomLineItemDraftCollection
     */
    public function getCustomLineItems()
    {
        return $this->customLineItems;
    }

    /**
     * @return null|Money
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * <p>Order Import does not support calculation of taxes.
     * When setting the draft the taxedPrice is to be provided.</p>
     *
     * @return null|TaxedPriceDraft
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedPriceDraftBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
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
     * <p>Set when the customer is set and the customer is a member of a customer group.
     * Used for product variant price selection.</p>
     *
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.
     * Used for product variant price selection.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>If not given the <code>Open</code> state will be assigned by default.</p>
     *
     * @return null|string
     */
    public function getOrderState()
    {
        return $this->orderState;
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
     * <p>Set if the ShippingMethod is set.</p>
     *
     * @return null|ShippingInfoImportDraft
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo instanceof ShippingInfoImportDraftBuilder ? $this->shippingInfo->build() : $this->shippingInfo;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>If not given the mode <code>None</code> will be assigned by default.</p>
     *
     * @return null|string
     */
    public function getInventoryMode()
    {
        return $this->inventoryMode;
    }

    /**
     * <p>If not given the tax rounding mode <code>HalfEven</code> will be assigned by default.</p>
     *
     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        return $this->taxRoundingMode;
    }

    /**
     * <p>Contains addresses for orders with multiple shipping addresses.</p>
     *
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses()
    {
        return $this->itemShippingAddresses;
    }

    /**
     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        return $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store;
    }

    /**
     * <p>The default origin is <code>Customer</code>.</p>
     *
     * @return null|string
     */
    public function getOrigin()
    {
        return $this->origin;
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
    public function withLineItems(?LineItemImportDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomLineItems(?CustomLineItemDraftCollection $customLineItems)
    {
        $this->customLineItems = $customLineItems;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalPrice(?Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxedPrice(?TaxedPriceDraft $taxedPrice)
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
    public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
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
    public function withShippingInfo(?ShippingInfoImportDraft $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

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
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

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
    public function withTaxRoundingMode(?string $taxRoundingMode)
    {
        $this->taxRoundingMode = $taxRoundingMode;

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
    public function withStore(?StoreResourceIdentifier $store)
    {
        $this->store = $store;

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
    public function withTotalPriceBuilder(?MoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxedPriceBuilder(?TaxedPriceDraftBuilder $taxedPrice)
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
    public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingInfoBuilder(?ShippingInfoImportDraftBuilder $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStoreBuilder(?StoreResourceIdentifierBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    public function build(): OrderImportDraft
    {
        return new OrderImportDraftModel(
            $this->orderNumber,
            $this->customerId,
            $this->customerEmail,
            $this->lineItems,
            $this->customLineItems,
            $this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice,
            $this->taxedPrice instanceof TaxedPriceDraftBuilder ? $this->taxedPrice->build() : $this->taxedPrice,
            $this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress,
            $this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress,
            $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->country,
            $this->orderState,
            $this->shipmentState,
            $this->paymentState,
            $this->shippingInfo instanceof ShippingInfoImportDraftBuilder ? $this->shippingInfo->build() : $this->shippingInfo,
            $this->completedAt,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom,
            $this->inventoryMode,
            $this->taxRoundingMode,
            $this->itemShippingAddresses,
            $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store,
            $this->origin
        );
    }

    public static function of(): OrderImportDraftBuilder
    {
        return new self();
    }
}
