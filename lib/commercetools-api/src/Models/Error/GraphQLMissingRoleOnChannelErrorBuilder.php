<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLMissingRoleOnChannelError>
 */
final class GraphQLMissingRoleOnChannelErrorBuilder implements Builder
{
    /**

     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $channel;

    /**

     * @var ?string
     */
    private $missingRole;

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a given <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * <ul>
     * <li><code>ProductDistribution</code> for Product Distribution Channels allowed for the Store. Also required for <a href="ctp:api:type:StandalonePrice">Standalone Prices</a>.</li>
     * <li><code>InventorySupply</code> for Inventory Supply Channels allowed for the Store.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getMissingRole()
    {
        return $this->missingRole;
    }

    /**
     * @param ?ChannelResourceIdentifier $channel
     * @return $this
     */
    public function withChannel(?ChannelResourceIdentifier $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @param ?string $missingRole
     * @return $this
     */
    public function withMissingRole(?string $missingRole)
    {
        $this->missingRole = $missingRole;

        return $this;
    }

    /**
     * @deprecated use withChannel() instead
     * @return $this
     */
    public function withChannelBuilder(?ChannelResourceIdentifierBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    public function build(): GraphQLMissingRoleOnChannelError
    {
        return new GraphQLMissingRoleOnChannelErrorModel(
            $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel,
            $this->missingRole
        );
    }

    public static function of(): GraphQLMissingRoleOnChannelErrorBuilder
    {
        return new self();
    }
}
