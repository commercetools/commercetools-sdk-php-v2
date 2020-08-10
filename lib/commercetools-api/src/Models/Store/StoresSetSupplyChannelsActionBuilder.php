<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifierCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoresSetSupplyChannelsAction>
 */
final class StoresSetSupplyChannelsActionBuilder implements Builder
{
    /**
     * @var ?ChannelResourceIdentifierCollection
     */
    private $supplyChannels;

    /**
     * @return null|ChannelResourceIdentifierCollection
     */
    public function getSupplyChannels()
    {
        return $this->supplyChannels;
    }

    /**
     * @param ?ChannelResourceIdentifierCollection $supplyChannels
     * @return $this
     */
    public function withSupplyChannels(?ChannelResourceIdentifierCollection $supplyChannels)
    {
        $this->supplyChannels = $supplyChannels;

        return $this;
    }


    public function build(): StoresSetSupplyChannelsAction
    {
        return new StoresSetSupplyChannelsActionModel(
            $this->supplyChannels
        );
    }

    public static function of(): StoresSetSupplyChannelsActionBuilder
    {
        return new self();
    }
}
