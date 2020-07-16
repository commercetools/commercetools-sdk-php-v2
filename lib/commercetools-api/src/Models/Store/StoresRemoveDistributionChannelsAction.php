<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoresRemoveDistributionChannelsAction extends StoreUpdateAction
{
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel();

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     */
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;
}
