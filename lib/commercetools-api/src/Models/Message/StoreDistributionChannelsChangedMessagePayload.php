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
     * <p>The product distribution channels that have been added.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getAddedDistributionChannels();

    /**
     * <p>The product distribution channels that have been removed.</p>
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
