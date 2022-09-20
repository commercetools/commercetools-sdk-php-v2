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
 * @implements Builder<StoreDistributionChannelsChangedMessagePayload>
 */
final class StoreDistributionChannelsChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?ChannelReferenceCollection
     */
    private $addedDistributionChannels;

    /**

     * @var ?ChannelReferenceCollection
     */
    private $removedDistributionChannels;

    /**
     * <p>Product distribution Channels that have been added to the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getAddedDistributionChannels()
    {
        return $this->addedDistributionChannels;
    }

    /**
     * <p>Product distribution Channels that have been removed from the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getRemovedDistributionChannels()
    {
        return $this->removedDistributionChannels;
    }

    /**
     * @param ?ChannelReferenceCollection $addedDistributionChannels
     * @return $this
     */
    public function withAddedDistributionChannels(?ChannelReferenceCollection $addedDistributionChannels)
    {
        $this->addedDistributionChannels = $addedDistributionChannels;

        return $this;
    }

    /**
     * @param ?ChannelReferenceCollection $removedDistributionChannels
     * @return $this
     */
    public function withRemovedDistributionChannels(?ChannelReferenceCollection $removedDistributionChannels)
    {
        $this->removedDistributionChannels = $removedDistributionChannels;

        return $this;
    }


    public function build(): StoreDistributionChannelsChangedMessagePayload
    {
        return new StoreDistributionChannelsChangedMessagePayloadModel(
            $this->addedDistributionChannels,
            $this->removedDistributionChannels
        );
    }

    public static function of(): StoreDistributionChannelsChangedMessagePayloadBuilder
    {
        return new self();
    }
}
