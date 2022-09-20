<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReferenceCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreSupplyChannelsChangedMessagePayload>
 */
final class StoreSupplyChannelsChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?ChannelReferenceCollection
     */
    private $addedSupplyChannels;

    /**

     * @var ?ChannelReferenceCollection
     */
    private $removedSupplyChannels;

    /**
     * <p>Inventory supply Channels that have been added to the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getAddedSupplyChannels()
    {
        return $this->addedSupplyChannels;
    }

    /**
     * <p>Inventory supply Channels that have been removed from the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getRemovedSupplyChannels()
    {
        return $this->removedSupplyChannels;
    }

    /**
     * @param ?ChannelReferenceCollection $addedSupplyChannels
     * @return $this
     */
    public function withAddedSupplyChannels(?ChannelReferenceCollection $addedSupplyChannels)
    {
        $this->addedSupplyChannels = $addedSupplyChannels;

        return $this;
    }

    /**
     * @param ?ChannelReferenceCollection $removedSupplyChannels
     * @return $this
     */
    public function withRemovedSupplyChannels(?ChannelReferenceCollection $removedSupplyChannels)
    {
        $this->removedSupplyChannels = $removedSupplyChannels;

        return $this;
    }


    public function build(): StoreSupplyChannelsChangedMessagePayload
    {
        return new StoreSupplyChannelsChangedMessagePayloadModel(
            $this->addedSupplyChannels,
            $this->removedSupplyChannels
        );
    }

    public static function of(): StoreSupplyChannelsChangedMessagePayloadBuilder
    {
        return new self();
    }
}
