<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftBuilder;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\Common\PriceDraftBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<LineItemImportDraft>
 */
final class LineItemImportDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $productId;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $name;

    /**
     * @var ProductVariantImportDraft|?ProductVariantImportDraftBuilder
     */
    private $variant;

    /**
     * @var PriceDraft|?PriceDraftBuilder
     */
    private $price;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var ?ItemStateCollection
     */
    private $state;

    /**
     * @var ChannelResourceIdentifier|?ChannelResourceIdentifierBuilder
     */
    private $supplyChannel;

    /**
     * @var ChannelResourceIdentifier|?ChannelResourceIdentifierBuilder
     */
    private $distributionChannel;

    /**
     * @var TaxRate|?TaxRateBuilder
     */
    private $taxRate;

    /**
     * @var CustomFieldsDraft|?CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * @var ItemShippingDetailsDraft|?ItemShippingDetailsDraftBuilder
     */
    private $shippingDetails;

    /**
     * <p>ID of the existing product.
     * You also need to specify the ID of the variant if this property is set or alternatively you can just specify SKU of the product variant.</p>.
     *
     * @return null|string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * <p>The product name.</p>.
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * @return null|ProductVariantImportDraft
     */
    public function getVariant()
    {
        return $this->variant instanceof ProductVariantImportDraftBuilder ? $this->variant->build() : $this->variant;
    }

    /**
     * @return null|PriceDraft
     */
    public function getPrice()
    {
        return $this->price instanceof PriceDraftBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|ItemStateCollection
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>Optional connection to a particular supplier.
     * By providing supply channel information, you can uniquely identify
     * inventory entries that should be reserved.
     * The provided channel should have the
     * InventorySupply role.</p>.
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * <p>The channel is used to select a ProductPrice.
     * The provided channel should have the ProductDistribution role.</p>.
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel;
    }

    /**
     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * <p>The custom fields.</p>.
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails;
    }

    /**
     * @return $this
     */
    public function withProductId(?string $productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariant(?ProductVariantImportDraft $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrice(?PriceDraft $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?ItemStateCollection $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSupplyChannel(?ChannelResourceIdentifier $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDistributionChannel(?ChannelResourceIdentifier $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxRate(?TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;

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
    public function withShippingDetails(?ItemShippingDetailsDraft $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantBuilder(?ProductVariantImportDraftBuilder $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceBuilder(?PriceDraftBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelResourceIdentifierBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDistributionChannelBuilder(?ChannelResourceIdentifierBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxRateBuilder(?TaxRateBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

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
    public function withShippingDetailsBuilder(?ItemShippingDetailsDraftBuilder $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    public function build(): LineItemImportDraft
    {
        return new LineItemImportDraftModel(
            $this->productId,
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            ($this->variant instanceof ProductVariantImportDraftBuilder ? $this->variant->build() : $this->variant),
            ($this->price instanceof PriceDraftBuilder ? $this->price->build() : $this->price),
            $this->quantity,
            $this->state,
            ($this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel),
            ($this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel),
            ($this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate),
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            ($this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails)
        );
    }

    public static function of(): LineItemImportDraftBuilder
    {
        return new self();
    }
}
