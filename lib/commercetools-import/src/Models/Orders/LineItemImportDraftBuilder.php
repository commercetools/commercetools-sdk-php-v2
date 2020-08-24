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
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ChannelKeyReferenceBuilder;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringBuilder;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceBuilder;
use Commercetools\Import\Models\Prices\TaxRate;
use Commercetools\Import\Models\Prices\TaxRateBuilder;
use stdClass;

/**
 * @implements Builder<LineItemImportDraft>
 */
final class LineItemImportDraftBuilder implements Builder
{
    /**
     * @var null|ProductKeyReference|ProductKeyReferenceBuilder
     */
    private $product;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * @var null|LineItemProductVariantImportDraft|LineItemProductVariantImportDraftBuilder
     */
    private $variant;

    /**
     * @var null|LineItemPrice|LineItemPriceBuilder
     */
    private $price;

    /**
     * @var ?float
     */
    private $quantity;

    /**
     * @var ?ItemStateCollection
     */
    private $state;

    /**
     * @var null|ChannelKeyReference|ChannelKeyReferenceBuilder
     */
    private $supplyChannel;

    /**
     * @var null|ChannelKeyReference|ChannelKeyReferenceBuilder
     */
    private $distributionChannel;

    /**
     * @var null|TaxRate|TaxRateBuilder
     */
    private $taxRate;

    /**
     * @var null|ItemShippingDetailsDraft|ItemShippingDetailsDraftBuilder
     */
    private $shippingDetails;

    /**
     * <p>Maps to <code>LineItem.productId</code>.</p>
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Maps to <code>LineItem.name</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Maps to <code>ProductVariantImportDraft</code>.</p>
     *
     * @return null|LineItemProductVariantImportDraft
     */
    public function getVariant()
    {
        return $this->variant instanceof LineItemProductVariantImportDraftBuilder ? $this->variant->build() : $this->variant;
    }

    /**
     * <p>Maps to <code>LineItem.price</code>.</p>
     *
     * @return null|LineItemPrice
     */
    public function getPrice()
    {
        return $this->price instanceof LineItemPriceBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>Maps to <code>LineItem.quantity</code>.</p>
     *
     * @return null|float
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
     * <p>References a supply channel. Maps to <code>LineItem.supplyChannel</code>.</p>
     * <p>The supply channel referenced must already exist
     * in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ChannelKeyReference
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelKeyReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * <p>References a distribution channel. Maps to <code>LineItem.distributionChannel</code>.</p>
     * <p>The distribution channel referenced must already exist
     * in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ChannelKeyReference
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel instanceof ChannelKeyReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel;
    }

    /**
     * <p>Maps to <code>LineItem.taxRate</code>.</p>
     *
     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * <p>Maps to LineItem.shippingDetails.</p>
     *
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails;
    }

    /**
     * @param ?ProductKeyReference $product
     * @return $this
     */
    public function withProduct(?ProductKeyReference $product)
    {
        $this->product = $product;

        return $this;
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
     * @param ?LineItemProductVariantImportDraft $variant
     * @return $this
     */
    public function withVariant(?LineItemProductVariantImportDraft $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @param ?LineItemPrice $price
     * @return $this
     */
    public function withPrice(?LineItemPrice $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param ?float $quantity
     * @return $this
     */
    public function withQuantity(?float $quantity)
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
     * @param ?ChannelKeyReference $supplyChannel
     * @return $this
     */
    public function withSupplyChannel(?ChannelKeyReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @param ?ChannelKeyReference $distributionChannel
     * @return $this
     */
    public function withDistributionChannel(?ChannelKeyReference $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

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
     * @param ?ItemShippingDetailsDraft $shippingDetails
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
    public function withProductBuilder(?ProductKeyReferenceBuilder $product)
    {
        $this->product = $product;

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
    public function withVariantBuilder(?LineItemProductVariantImportDraftBuilder $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceBuilder(?LineItemPriceBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelKeyReferenceBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDistributionChannelBuilder(?ChannelKeyReferenceBuilder $distributionChannel)
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
    public function withShippingDetailsBuilder(?ItemShippingDetailsDraftBuilder $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

        return $this;
    }

    public function build(): LineItemImportDraft
    {
        return new LineItemImportDraftModel(
            $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->variant instanceof LineItemProductVariantImportDraftBuilder ? $this->variant->build() : $this->variant,
            $this->price instanceof LineItemPriceBuilder ? $this->price->build() : $this->price,
            $this->quantity,
            $this->state,
            $this->supplyChannel instanceof ChannelKeyReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel,
            $this->distributionChannel instanceof ChannelKeyReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel,
            $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate,
            $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails
        );
    }

    public static function of(): LineItemImportDraftBuilder
    {
        return new self();
    }
}
