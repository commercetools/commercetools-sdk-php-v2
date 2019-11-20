<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<InventoryEntryDeletedMessagePayload>
 */
final class InventoryEntryDeletedMessagePayloadBuilder implements Builder
{
    /**
     * @var ChannelReference|?ChannelReferenceBuilder
     */
    private $supplyChannel;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @return null|ChannelReference
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return $this
     */
    public function withSupplyChannel(?ChannelReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelReferenceBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    public function build(): InventoryEntryDeletedMessagePayload
    {
        return new InventoryEntryDeletedMessagePayloadModel(
            ($this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel),
            $this->sku
        );
    }

    public static function of(): InventoryEntryDeletedMessagePayloadBuilder
    {
        return new self();
    }
}
