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
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomBuilder;
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

     * @var null|Custom|CustomBuilder
     */
    private $custom;

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
     * <p>Maps to <code>LineItem.supplyChannel</code>.
     * The Reference to the Supply <a href="/../api/projects/channels#channel">Channel</a> with which the LineItem is associated.
     * If referenced Supply Channel does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Supply Channel is created.</p>
     *

     * @return null|ChannelKeyReference
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelKeyReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * <p>Maps to <code>LineItem.distributionChannel</code>.
     * The Reference to the Distribution <a href="/../api/projects/channels#channel">Channel</a> with which the LineItem is associated.
     * If referenced CustomerGroup does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Distribution Channel is created.</p>
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
     * <p>Custom Fields for this Line Item.</p>
     *

     * @return null|Custom
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom;
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
     * @param ?Custom $custom
     * @return $this
     */
    public function withCustom(?Custom $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductKeyReferenceBuilder $product)
    {
        $this->product = $product;

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
     * @deprecated use withVariant() instead
     * @return $this
     */
    public function withVariantBuilder(?LineItemProductVariantImportDraftBuilder $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @deprecated use withPrice() instead
     * @return $this
     */
    public function withPriceBuilder(?LineItemPriceBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @deprecated use withSupplyChannel() instead
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelKeyReferenceBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @deprecated use withDistributionChannel() instead
     * @return $this
     */
    public function withDistributionChannelBuilder(?ChannelKeyReferenceBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

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
    public function withCustomBuilder(?CustomBuilder $custom)
    {
        $this->custom = $custom;

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
            $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails,
            $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): LineItemImportDraftBuilder
    {
        return new self();
    }
}
