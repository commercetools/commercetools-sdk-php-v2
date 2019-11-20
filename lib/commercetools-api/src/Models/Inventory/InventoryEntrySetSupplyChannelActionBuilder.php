<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<InventoryEntrySetSupplyChannelAction>
 */
final class InventoryEntrySetSupplyChannelActionBuilder implements Builder
{
    /**
     * @var ChannelResourceIdentifier|?ChannelResourceIdentifierBuilder
     */
    private $supplyChannel;

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
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
    public function withSupplyChannelBuilder(?ChannelResourceIdentifierBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    public function build(): InventoryEntrySetSupplyChannelAction
    {
        return new InventoryEntrySetSupplyChannelActionModel(
            ($this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel)
        );
    }

    public static function of(): InventoryEntrySetSupplyChannelActionBuilder
    {
        return new self();
    }
}
