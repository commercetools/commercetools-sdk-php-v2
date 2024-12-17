<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftBuilder;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomLineItemImportDraft>
 */
final class CustomLineItemImportDraftBuilder implements Builder
{
    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $slug;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $money;

    /**

     * @var null|TaxRate|TaxRateBuilder
     */
    private $taxRate;

    /**

     * @var null|TaxCategoryResourceIdentifier|TaxCategoryResourceIdentifierBuilder
     */
    private $taxCategory;

    /**

     * @var ?string
     */
    private $priceMode;

    /**

     * @var null|ItemShippingDetailsDraft|ItemShippingDetailsDraftBuilder
     */
    private $shippingDetails;

    /**

     * @var ?ItemStateCollection
     */
    private $state;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>Name of the Custom Line Item.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>User-defined unique identifier of the Custom Line Item.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>User-defined identifier used in a deep-link URL for the Custom Line Item. This value should match the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *

     * @return null|string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * <p>The number of items in the Custom Line Item. Can be a negative value.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>The cost of individual items in the Custom Line Item. The amount can be negative.</p>
     *

     * @return null|Money
     */
    public function getMoney()
    {
        return $this->money instanceof MoneyBuilder ? $this->money->build() : $this->money;
    }

    /**
     * <p>The tax rate used to calculate the <code>taxedPrice</code> of the Order.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * <p>Include a value to associate a Tax Category with the Custom Line Item.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * <ul>
     * <li>If <code>Standard</code>, Cart Discounts with a matching <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemsTarget</a>, <a href="ctp:api:type:MultiBuyCustomLineItemsTarget">MultiBuyCustomLineItemsTarget</a>, or <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a> are applied to the Custom Line Item.</li>
     * <li>If <code>External</code>, Cart Discounts are not considered on the Custom Line Item.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * <p>Container for Custom Line Item-specific addresses.</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails;
    }

    /**
     * <p>State of the Custom Line Items.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>Custom Fields of the CustomLineItem.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
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
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

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
     * @param ?Money $money
     * @return $this
     */
    public function withMoney(?Money $money)
    {
        $this->money = $money;

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
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @param ?string $priceMode
     * @return $this
     */
    public function withPriceMode(?string $priceMode)
    {
        $this->priceMode = $priceMode;

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
     * @param ?ItemStateCollection $state
     * @return $this
     */
    public function withState(?ItemStateCollection $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

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
    public function withMoneyBuilder(?MoneyBuilder $money)
    {
        $this->money = $money;

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
     * @deprecated use withTaxCategory() instead
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

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

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): CustomLineItemImportDraft
    {
        return new CustomLineItemImportDraftModel(
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->key,
            $this->slug,
            $this->quantity,
            $this->money instanceof MoneyBuilder ? $this->money->build() : $this->money,
            $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate,
            $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->priceMode,
            $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails,
            $this->state,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): CustomLineItemImportDraftBuilder
    {
        return new self();
    }
}
