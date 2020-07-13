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
 * @implements Builder<StoresSetDistributionChannelsAction>
 */
final class StoresSetDistributionChannelsActionBuilder implements Builder
{
    /**
     * @var ?ChannelResourceIdentifierCollection
     */
    private $distributionChannels;

    /**
     * @return null|ChannelResourceIdentifierCollection
     */
    public function getDistributionChannels()
    {
        return $this->distributionChannels;
    }

    /**
     * @return $this
     */
    public function withDistributionChannels(?ChannelResourceIdentifierCollection $distributionChannels)
    {
        $this->distributionChannels = $distributionChannels;

        return $this;
    }


    public function build(): StoresSetDistributionChannelsAction
    {
        return new StoresSetDistributionChannelsActionModel(
            $this->distributionChannels
        );
    }

    public static function of(): StoresSetDistributionChannelsActionBuilder
    {
        return new self();
    }
}
