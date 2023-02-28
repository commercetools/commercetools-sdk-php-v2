<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartAddLineItemAction>
 */
final class CartAddLineItemActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $productId;

    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $distributionChannel;

    /**

     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $supplyChannel;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $externalPrice;

    /**

     * @var null|ExternalLineItemTotalPrice|ExternalLineItemTotalPriceBuilder
     */
    private $externalTotalPrice;

    /**

     * @var null|ExternalTaxRateDraft|ExternalTaxRateDraftBuilder
     */
    private $externalTaxRate;

    /**

     * @var null|ItemShippingDetailsDraft|ItemShippingDetailsDraftBuilder
     */
    private $shippingDetails;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>ID of an existing <a href="ctp:api:type:Product">Product</a>.</p>
     * <p>Either the <code>productId</code> and <code>variantId</code>, or <code>sku</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * <p>ID of an existing <a href="ctp:api:type:ProductVariant">ProductVariant</a> in the Product.</p>
     * <p>If not given, the Master Variant is used.</p>
     * <p>Either the <code>productId</code> and <code>variantId</code>, or <code>sku</code> must be provided.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>SKU of an existing <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     * <p>Either the <code>productId</code> and <code>variantId</code>, or <code>sku</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Number of Line Items to add to the Cart.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>Used to <a href="ctp:api:type:LineItemPriceSelection">select</a> a Product Price.
     * The Channel must have the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.
     * If the Cart is bound to a <a href="ctp:api:type:Store">Store</a> with <code>distributionChannels</code> set, the Channel must match one of the Store's distribution channels.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel;
    }

    /**
     * <p>Used to identify <a href="/../api/projects/inventory">Inventory entries</a> that must be reserved.
     * The Channel must have the <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:LineItem">LineItem</a> <code>price</code> value, and the <code>priceMode</code> to <code>ExternalPrice</code> <a href="ctp:api:type:LineItemPriceMode">LineItemPriceMode</a>.</p>
     *

     * @return null|Money
     */
    public function getExternalPrice()
    {
        return $this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:LineItem">LineItem</a> <code>price</code> and <code>totalPrice</code> values, and the <code>priceMode</code> to <code>ExternalTotal</code> <a href="ctp:api:type:LineItemPriceMode">LineItemPriceMode</a>.</p>
     *

     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        return $this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice;
    }

    /**
     * <p>External Tax Rate for the Line Item, if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        return $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate;
    }

    /**
     * <p>Container for Line Item-specific addresses.</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails;
    }

    /**
     * <p>Custom Fields for the Line Item.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $productId
     * @return $this
     */
    public function withProductId(?string $productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

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
     * @param ?ChannelResourceIdentifier $distributionChannel
     * @return $this
     */
    public function withDistributionChannel(?ChannelResourceIdentifier $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     * @return $this
     */
    public function withSupplyChannel(?ChannelResourceIdentifier $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @param ?Money $externalPrice
     * @return $this
     */
    public function withExternalPrice(?Money $externalPrice)
    {
        $this->externalPrice = $externalPrice;

        return $this;
    }

    /**
     * @param ?ExternalLineItemTotalPrice $externalTotalPrice
     * @return $this
     */
    public function withExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;

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
     * @param ?ItemShippingDetailsDraft $shippingDetails
     * @return $this
     */
    public function withShippingDetails(?ItemShippingDetailsDraft $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;

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
     * @deprecated use withDistributionChannel() instead
     * @return $this
     */
    public function withDistributionChannelBuilder(?ChannelResourceIdentifierBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @deprecated use withSupplyChannel() instead
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelResourceIdentifierBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @deprecated use withExternalPrice() instead
     * @return $this
     */
    public function withExternalPriceBuilder(?MoneyBuilder $externalPrice)
    {
        $this->externalPrice = $externalPrice;

        return $this;
    }

    /**
     * @deprecated use withExternalTotalPrice() instead
     * @return $this
     */
    public function withExternalTotalPriceBuilder(?ExternalLineItemTotalPriceBuilder $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;

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

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): CartAddLineItemAction
    {
        return new CartAddLineItemActionModel(
            $this->productId,
            $this->variantId,
            $this->sku,
            $this->quantity,
            $this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel,
            $this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel,
            $this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice,
            $this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice,
            $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate,
            $this->shippingDetails instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetails->build() : $this->shippingDetails,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): CartAddLineItemActionBuilder
    {
        return new self();
    }
}
