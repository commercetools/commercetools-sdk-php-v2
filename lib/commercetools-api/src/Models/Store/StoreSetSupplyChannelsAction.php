<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreSetSupplyChannelsAction extends StoreUpdateAction
{
    public const FIELD_SUPPLY_CHANNELS = 'supplyChannels';

    /**
     * <p>Value to set.
     * If not defined, the Store's <code>supplyChannels</code> are unset.</p>
     *

     * @return null|ChannelResourceIdentifierCollection
     */
    public function getSupplyChannels();

    /**
     * @param ?ChannelResourceIdentifierCollection $supplyChannels
     */
    public function setSupplyChannels(?ChannelResourceIdentifierCollection $supplyChannels): void;
}
