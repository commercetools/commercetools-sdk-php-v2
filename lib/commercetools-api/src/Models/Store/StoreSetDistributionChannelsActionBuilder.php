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
 * @implements Builder<StoreSetDistributionChannelsAction>
 */
final class StoreSetDistributionChannelsActionBuilder implements Builder
{
    /**
     * @var ?ChannelResourceIdentifierCollection
     */
    private $distributionChannels;

    /**
     * <p>Value to set.
     * If not defined, the Store's <code>distributionChannels</code> are unset.
     * Any attempt to use <a href="ctp:api:type:Channel">Channel</a> without the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a> will fail with a <a href="ctp:api:type:MissingRoleOnChannelError">MissingRoleOnChannel</a> error.</p>
     *
     * @return null|ChannelResourceIdentifierCollection
     */
    public function getDistributionChannels()
    {
        return $this->distributionChannels;
    }

    /**
     * @param ?ChannelResourceIdentifierCollection $distributionChannels
     * @return $this
     */
    public function withDistributionChannels(?ChannelResourceIdentifierCollection $distributionChannels)
    {
        $this->distributionChannels = $distributionChannels;

        return $this;
    }


    public function build(): StoreSetDistributionChannelsAction
    {
        return new StoreSetDistributionChannelsActionModel(
            $this->distributionChannels
        );
    }

    public static function of(): StoreSetDistributionChannelsActionBuilder
    {
        return new self();
    }
}
