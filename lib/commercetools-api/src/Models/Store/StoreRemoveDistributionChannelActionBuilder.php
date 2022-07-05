<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreRemoveDistributionChannelAction>
 */
final class StoreRemoveDistributionChannelActionBuilder implements Builder
{
    /**

     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $distributionChannel;

    /**
     * <p>Value to remove. ResourceIdentifier of a Channel with the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel;
    }

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     * @return $this
     */
    public function withDistributionChannel(?ChannelResourceIdentifier $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @deprecated use withDistributionChannel() instead
     * @return $this
     */
    public function withDistributionChannelBuilder(?ChannelResourceIdentifierBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    public function build(): StoreRemoveDistributionChannelAction
    {
        return new StoreRemoveDistributionChannelActionModel(
            $this->distributionChannel instanceof ChannelResourceIdentifierBuilder ? $this->distributionChannel->build() : $this->distributionChannel
        );
    }

    public static function of(): StoreRemoveDistributionChannelActionBuilder
    {
        return new self();
    }
}
