<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Cart\CustomLineItemDraftCollection;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Cart\TaxedPriceBuilder;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<OrderImportDraft>
 */
final class OrderImportDraftBuilder implements Builder
{
    public function __construct() {
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
     * @var ?MoneyBuilder|Money
     */
    protected $totalPrice;
    
    /**
     * @var ?CustomerGroupResourceIdentifierBuilder|CustomerGroupResourceIdentifier
     */
    protected $customerGroup;
    
    /**
     * @var ?TaxedPriceBuilder|TaxedPrice
     */
    protected $taxedPrice;
    
    /**
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?ShippingInfoImportDraftBuilder|ShippingInfoImportDraft
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
     * @var ?AddressBuilder|Address
     */
    protected $shippingAddress;
    
    /**
     * @var ?AddressBuilder|Address
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
       return $this->shipmentState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCountry()
    {
       return $this->country;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCompletedAt()
    {
       return $this->completedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrderNumber()
    {
       return $this->orderNumber;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getTotalPrice()
    {
       return ($this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice);
    }
    
    /**
     *
     * @return CustomerGroupResourceIdentifier|null
     */
    final public function getCustomerGroup()
    {
       return ($this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup);
    }
    
    /**
     *
     * @return TaxedPrice|null
     */
    final public function getTaxedPrice()
    {
       return ($this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice);
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return ShippingInfoImportDraft|null
     */
    final public function getShippingInfo()
    {
       return ($this->shippingInfo instanceof ShippingInfoImportDraftBuilder ? $this->shippingInfo->build() : $this->shippingInfo);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInventoryMode()
    {
       return $this->inventoryMode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrderState()
    {
       return $this->orderState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxRoundingMode()
    {
       return $this->taxRoundingMode;
    }
    
    /**
     *
     * @return LineItemImportDraftCollection|null
     */
    final public function getLineItems()
    {
       return $this->lineItems;
    }
    
    /**
     *
     * @return CustomLineItemDraftCollection|null
     */
    final public function getCustomLineItems()
    {
       return $this->customLineItems;
    }
    
    /**
     *
     * @return AddressCollection|null
     */
    final public function getItemShippingAddresses()
    {
       return $this->itemShippingAddresses;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerEmail()
    {
       return $this->customerEmail;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerId()
    {
       return $this->customerId;
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getShippingAddress()
    {
       return ($this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress);
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getBillingAddress()
    {
       return ($this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPaymentState()
    {
       return $this->paymentState;
    }
    /**
     * @return $this
     */
    final public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCountry(?string $country)
    {
        $this->country = $country;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCompletedAt(?DateTimeImmutable $completedAt)
    {
        $this->completedAt = $completedAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotalPrice(?Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxedPrice(?TaxedPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingInfo(?ShippingInfoImportDraft $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInventoryMode(?string $inventoryMode)
    {
        $this->inventoryMode = $inventoryMode;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOrderState(?string $orderState)
    {
        $this->orderState = $orderState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxRoundingMode(?string $taxRoundingMode)
    {
        $this->taxRoundingMode = $taxRoundingMode;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLineItems(?LineItemImportDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomLineItems(?CustomLineItemDraftCollection $customLineItems)
    {
        $this->customLineItems = $customLineItems;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withItemShippingAddresses(?AddressCollection $itemShippingAddresses)
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerEmail(?string $customerEmail)
    {
        $this->customerEmail = $customerEmail;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerId(?string $customerId)
    {
        $this->customerId = $customerId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingAddress(?Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withBillingAddress(?Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTotalPriceBuilder(?MoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxedPriceBuilder(?TaxedPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingInfoBuilder(?ShippingInfoImportDraftBuilder $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingAddressBuilder(?AddressBuilder $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withBillingAddressBuilder(?AddressBuilder $billingAddress)
    {
        $this->billingAddress = $billingAddress;
        
        return $this;
    }
    
    public function build(): OrderImportDraft {
        return new OrderImportDraftModel(
            $this->shipmentState,
            $this->country,
            $this->completedAt,
            $this->orderNumber,
            ($this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice),
            ($this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice),
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            ($this->shippingInfo instanceof ShippingInfoImportDraftBuilder ? $this->shippingInfo->build() : $this->shippingInfo),
            $this->inventoryMode,
            $this->orderState,
            $this->taxRoundingMode,
            $this->lineItems,
            $this->customLineItems,
            $this->itemShippingAddresses,
            $this->customerEmail,
            $this->customerId,
            ($this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress),
            ($this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress),
            $this->paymentState
        );
    }
    
    public static function of(): OrderImportDraftBuilder
    {
        return new self();
    }
}