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

interface StoreSupplyChannelsChangedMessagePayload extends MessagePayload
{
    public const FIELD_ADDED_SUPPLY_CHANNELS = 'addedSupplyChannels';
    public const FIELD_REMOVED_SUPPLY_CHANNELS = 'removedSupplyChannels';

    /**
     * <p>Inventory supply Channels that have been added to the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getAddedSupplyChannels();

    /**
     * <p>Inventory supply Channels that have been removed from the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ChannelReferenceCollection
     */
    public function getRemovedSupplyChannels();

    /**
     * @param ?ChannelReferenceCollection $addedSupplyChannels
     */
    public function setAddedSupplyChannels(?ChannelReferenceCollection $addedSupplyChannels): void;

    /**
     * @param ?ChannelReferenceCollection $removedSupplyChannels
     */
    public function setRemovedSupplyChannels(?ChannelReferenceCollection $removedSupplyChannels): void;
}
