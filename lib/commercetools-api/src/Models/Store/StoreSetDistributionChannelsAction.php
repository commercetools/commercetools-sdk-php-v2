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

interface StoreSetDistributionChannelsAction extends StoreUpdateAction
{
    public const FIELD_DISTRIBUTION_CHANNELS = 'distributionChannels';

    /**
     * <p>Value to set.
     * If not defined, the Store's <code>distributionChannels</code> are unset.</p>
     *

     * @return null|ChannelResourceIdentifierCollection
     */
    public function getDistributionChannels();

    /**
     * @param ?ChannelResourceIdentifierCollection $distributionChannels
     */
    public function setDistributionChannels(?ChannelResourceIdentifierCollection $distributionChannels): void;
}
