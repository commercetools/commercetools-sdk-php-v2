<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<ChangeValueGiftLineItemChangeValue>
 */
final class ChangeValueGiftLineItemChangeValueBuilder implements Builder
{
    /**
     * @var null|Reference|ReferenceBuilder
     */
    private $product;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var null|Reference|ReferenceBuilder
     */
    private $supplyChannel;

    /**
     * @var null|Reference|ReferenceBuilder
     */
    private $distributionChannel;

    /**
     * @return null|Reference
     */
    public function getProduct()
    {
        return $this->product instanceof ReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|Reference
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * @return null|Reference
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel instanceof ReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel;
    }

    /**
     * @param ?Reference $product
     * @return $this
     */
    public function withProduct(?Reference $product)
    {
        $this->product = $product;

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
     * @param ?Reference $supplyChannel
     * @return $this
     */
    public function withSupplyChannel(?Reference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @param ?Reference $distributionChannel
     * @return $this
     */
    public function withDistributionChannel(?Reference $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @deprecated use withSupplyChannel() instead
     * @return $this
     */
    public function withSupplyChannelBuilder(?ReferenceBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @deprecated use withDistributionChannel() instead
     * @return $this
     */
    public function withDistributionChannelBuilder(?ReferenceBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    public function build(): ChangeValueGiftLineItemChangeValue
    {
        return new ChangeValueGiftLineItemChangeValueModel(
            $this->product instanceof ReferenceBuilder ? $this->product->build() : $this->product,
            $this->variantId,
            $this->supplyChannel instanceof ReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel,
            $this->distributionChannel instanceof ReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel
        );
    }

    public static function of(): ChangeValueGiftLineItemChangeValueBuilder
    {
        return new self();
    }
}
