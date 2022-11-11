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
 * @implements Builder<StoreSetSupplyChannelsAction>
 */
final class StoreSetSupplyChannelsActionBuilder implements Builder
{
    /**

     * @var ?ChannelResourceIdentifierCollection
     */
    private $supplyChannels;

    /**
     * <p>Value to set.
     * If not defined, the Store's <code>supplyChannels</code> are unset.</p>
     *

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


    public function build(): StoreSetSupplyChannelsAction
    {
        return new StoreSetSupplyChannelsActionModel(
            $this->supplyChannels
        );
    }

    public static function of(): StoreSetSupplyChannelsActionBuilder
    {
        return new self();
    }
}
