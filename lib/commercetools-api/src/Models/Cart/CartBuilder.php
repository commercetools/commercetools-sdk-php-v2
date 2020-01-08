<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

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
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Order\PaymentInfoBuilder;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<Cart>
 */
final class CartBuilder implements Builder
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
     * @var ?string
     */
    private $cartState;

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
    private $inventoryMode;

    /**
     * @var ?string
     */
    private $taxMode;

    /**
     * @var ?string
     */
    private $taxRoundingMode;

    /**
     * @var ?string
     */
    private $taxCalculationMode;

    /**
     * @var CustomerGroupReference|?CustomerGroupReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var ?string
     */
    private $country;

    /**
     * @var ShippingInfo|?ShippingInfoBuilder
     */
    private $shippingInfo;

    /**
     * @var ?DiscountCodeInfoCollection
     */
    private $discountCodes;

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
     * @var ?int
     */
    private $deleteDaysAfterLastModification;

    /**
     * @var ?CartDiscountReferenceCollection
     */
    private $refusedGifts;

    /**
     * @var ?string
     */
    private $origin;

    /**
     * @var ShippingRateInput|?ShippingRateInputBuilder
     */
    private $shippingRateInput;

    /**
     * @var ?AddressCollection
     */
    private $itemShippingAddresses;

    /**
     * <p>The unique ID of the cart.</p>.
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The current version of the cart.</p>.
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
     * <p>The sum of all <code>totalPrice</code> fields of the <code>lineItems</code> and <code>customLineItems</code>, as well as the <code>price</code> field of <code>shippingInfo</code> (if it exists).
     * <code>totalPrice</code> may or may not include the taxes: it depends on the taxRate.includedInPrice property of each price.</p>.
     *
     * @return null|TypedMoney
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * <p>Not set until the shipping address is set.
     * Will be set automatically in the <code>Platform</code> TaxMode.
     * For the <code>External</code> tax mode it will be set  as soon as the external tax rates for all line items, custom line items, and shipping in the cart are set.</p>.
     *
     * @return null|TaxedPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
    }

    /**
     * @return null|string
     */
    public function getCartState()
    {
        return $this->cartState;
    }

    /**
     * <p>The shipping address is used to determine the eligible shipping methods and rates as well as the tax rate of the line items.</p>.
     *
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
    public function getInventoryMode()
    {
        return $this->inventoryMode;
    }

    /**
     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for rounding.</p>.
     *
     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        return $this->taxRoundingMode;
    }

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for calculating the price with <code>LineItemLevel</code> (horizontally) or <code>UnitPriceLevel</code> (vertically) calculation mode.</p>.
     *
     * @return null|string
     */
    public function getTaxCalculationMode()
    {
        return $this->taxCalculationMode;
    }

    /**
     * <p>Set automatically when the customer is set and the customer is a member of a customer group.
     * Used for product variant
     * price selection.</p>.
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
     * <p>Set automatically once the ShippingMethod is set.</p>.
     *
     * @return null|ShippingInfo
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo;
    }

    /**
     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes()
    {
        return $this->discountCodes;
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
     * <p>The cart will be deleted automatically if it hasn't been modified for the specified amount of days and it is in the <code>Active</code> CartState.</p>.
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        return $this->deleteDaysAfterLastModification;
    }

    /**
     * <p>Automatically filled when a line item with LineItemMode <code>GiftLineItem</code> is removed from the cart.</p>.
     *
     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts()
    {
        return $this->refusedGifts;
    }

    /**
     * <p>The origin field indicates how this cart was created.
     * The value <code>Customer</code> indicates, that the cart was created by the customer.</p>.
     *
     * @return null|string
     */
    public function getOrigin()
    {
        return $this->origin;
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
     * <p>Contains addresses for carts with multiple shipping addresses.
     * Line items reference these addresses under their <code>shippingDetails</code>.
     * The addresses captured here are not used to determine eligible shipping methods or the applicable tax rate.
     * Only the cart's <code>shippingAddress</code> is used for this.</p>.
     *
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses()
    {
        return $this->itemShippingAddresses;
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
    public function withCartState(?string $cartState)
    {
        $this->cartState = $cartState;

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
    public function withInventoryMode(?string $inventoryMode)
    {
        $this->inventoryMode = $inventoryMode;

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
    public function withTaxCalculationMode(?string $taxCalculationMode)
    {
        $this->taxCalculationMode = $taxCalculationMode;

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
    public function withShippingInfo(?ShippingInfo $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

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
    public function withDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;

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
    public function withOrigin(?string $origin)
    {
        $this->origin = $origin;

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
    public function withShippingInfoBuilder(?ShippingInfoBuilder $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

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

    public function build(): Cart
    {
        return new CartModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            $this->customerId,
            $this->customerEmail,
            $this->anonymousId,
            ($this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store),
            $this->lineItems,
            $this->customLineItems,
            ($this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice),
            ($this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice),
            $this->cartState,
            ($this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress),
            ($this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress),
            $this->inventoryMode,
            $this->taxMode,
            $this->taxRoundingMode,
            $this->taxCalculationMode,
            ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            $this->country,
            ($this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo),
            $this->discountCodes,
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            ($this->paymentInfo instanceof PaymentInfoBuilder ? $this->paymentInfo->build() : $this->paymentInfo),
            $this->locale,
            $this->deleteDaysAfterLastModification,
            $this->refusedGifts,
            $this->origin,
            ($this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput),
            $this->itemShippingAddresses
        );
    }

    public static function of(): CartBuilder
    {
        return new self();
    }
}
