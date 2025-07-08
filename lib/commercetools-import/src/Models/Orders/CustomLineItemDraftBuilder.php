<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringBuilder;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;
use Commercetools\Import\Models\Common\TaxCategoryKeyReferenceBuilder;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Common\TypedMoneyBuilder;
use Commercetools\Import\Models\Prices\TaxRate;
use Commercetools\Import\Models\Prices\TaxRateBuilder;
use stdClass;

/**
 * @implements Builder<CustomLineItemDraft>
 */
final class CustomLineItemDraftBuilder implements Builder
{
    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $money;

    /**

     * @var null|CustomLineItemTaxedPrice|CustomLineItemTaxedPriceBuilder
     */
    private $taxedPrice;

    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $totalPrice;

    /**

     * @var ?string
     */
    private $slug;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var ?ItemStateCollection
     */
    private $state;

    /**

     * @var null|TaxCategoryKeyReference|TaxCategoryKeyReferenceBuilder
     */
    private $taxCategory;

    /**

     * @var null|TaxRate|TaxRateBuilder
     */
    private $taxRate;

    /**

     * @var null|ExternalTaxRateDraft|ExternalTaxRateDraftBuilder
     */
    private $externalTaxRate;

    /**

     * @var ?DiscountedLineItemPriceDraftCollection
     */
    private $discountedPricePerQuantity;

    /**

     * @var null|ItemShippingDetailsDraft|ItemShippingDetailsDraftBuilder
     */
    private $shippingDetails;

    /**
     * <p>Maps to <code>CustomLineItem.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Maps to <code>CustomLineItem.money</code>.</p>
     *

     * @return null|TypedMoney
     */
    public function getMoney()
    {
        return $this->money instanceof TypedMoneyBuilder ? $this->money->build() : $this->money;
    }

    /**
     * <p>Maps to <code>CustomLineItem.taxedPrice</code>.</p>
     *

     * @return null|CustomLineItemTaxedPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof CustomLineItemTaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
    }

    /**
     * <p>Maps to <code>CustomLineItem.totalPrice</code>.</p>
     *

     * @return null|TypedMoney
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * <p>Maps to <code>CustomLineItem.slug</code>.</p>
     *

     * @return null|string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * <p>Maps to <code>CustomLineItem.quantity</code>.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>Maps to <code>CustomLineItem.state</code>.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>Maps to <code>CustomLineItem.taxCategory</code>. References a tax category by key. If the referenced <a href="ctp:api:type:TaxCategory">TaxCategory</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced TaxCategory is created.</p>
     *

     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryKeyReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * <p>Maps to <code>CustomLineItem.taxRate</code>.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * <p>External Tax Rate for the Custom Line Item if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        return $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate;
    }

    /**
     * <p>Maps to <code>CustomLineItem.discountedPricePerQuantity</code>.</p>
     *

     * @return null|DiscountedLineItemPriceDraftCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        return $this->discountedPricePerQuantity;
    }

    /**
     * <p>Maps to <code>CustomLineItem.shippingDetails</code>.</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?TypedMoney $money
     * @return $this
     */
    public function withMoney(?TypedMoney $money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @param ?CustomLineItemTaxedPrice $taxedPrice
     * @return $this
     */
    public function withTaxedPrice(?CustomLineItemTaxedPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @param ?TypedMoney $totalPrice
     * @return $this
     */
    public function withTotalPrice(?TypedMoney $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @param ?string $slug
     * @return $this
     */
    public function withSlug(?string $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?ItemStateCollection $state
     * @return $this
     */
    public function withState(?ItemStateCollection $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?TaxCategoryKeyReference $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryKeyReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @param ?TaxRate $taxRate
     * @return $this
     */
    public function withTaxRate(?TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     * @return $this
     */
    public function withExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    /**
     * @param ?DiscountedLineItemPriceDraftCollection $discountedPricePerQuantity
     * @return $this
     */
    public function withDiscountedPricePerQuantity(?DiscountedLineItemPriceDraftCollection $discountedPricePerQuantity)
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;

        return $this;
    }

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     * @return $this
     */
    public function withShippingDetails(?ItemShippingDetailsDraft $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withMoney() instead
     * @return $this
     */
    public function withMoneyBuilder(?TypedMoneyBuilder $money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @deprecated use withTaxedPrice() instead
     * @return $this
     */
    public function withTaxedPriceBuilder(?CustomLineItemTaxedPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @deprecated use withTotalPrice() instead
     * @return $this
     */
    public function withTotalPriceBuilder(?TypedMoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @deprecated use withTaxCategory() instead
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryKeyReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @deprecated use withTaxRate() instead
     * @return $this
     */
    public function withTaxRateBuilder(?TaxRateBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @deprecated use withExternalTaxRate() instead
     * @return $this
     */
    public function withExternalTaxRateBuilder(?ExternalTaxRateDraftBuilder $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    /**
     * @deprecated use withShippingDetails() instead
     * @return $this
     */
    public function withShippingDetailsBuilder(?ItemShippingDetailsDraftBuilder $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    public function build(): CustomLineItemDraft
    {
        return new CustomLineItemDraftModel(
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->money instanceof TypedMoneyBuilder ? $this->money->build() : $this->money,
            $this->taxedPrice instanceof CustomLineItemTaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice,
            $this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice,
            $this->slug,
            $this->quantity,
            $this->state,
            $this->taxCategory instanceof TaxCategoryKeyReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate,
            $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate,
            $this->discountedPricePerQuantity,
            $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails
        );
    }

    public static function of(): CustomLineItemDraftBuilder
    {
        return new self();
    }
}
