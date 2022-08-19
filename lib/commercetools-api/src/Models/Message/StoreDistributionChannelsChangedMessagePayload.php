<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReferenceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreDistributionChannelsChangedMessagePayload extends MessagePayload
{
    public const FIELD_ADDED_DISTRIBUTION_CHANNELS = 'addedDistributionChannels';
    public const FIELD_REMOVED_DISTRIBUTION_CHANNELS = 'removedDistributionChannels';

    /**
     * <p>Product distribution Channels that have been added to the <a href="/../api/projects/stores">Store</a>.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getAddedDistributionChannels();

    /**
     * <p>Product distribution Channels that have been removed from the <a href="/../api/projects/stores">Store</a>.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getRemovedDistributionChannels();

    /**
     * @param ?ChannelReferenceCollection $addedDistributionChannels
     */
    public function setAddedDistributionChannels(?ChannelReferenceCollection $addedDistributionChannels): void;

    /**
     * @param ?ChannelReferenceCollection $removedDistributionChannels
     */
    public function setRemovedDistributionChannels(?ChannelReferenceCollection $removedDistributionChannels): void;
}
