<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<OrderUpdateSyncInfoAction>
 */
final class OrderUpdateSyncInfoActionBuilder implements Builder
{
    /**
     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $channel;

    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @var ?DateTimeImmutable
     */
    private $syncedAt;

    /**
     * <p><a href="/../api/types#resourceidentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getSyncedAt()
    {
        return $this->syncedAt;
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
     * @param ?string $externalId
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $syncedAt
     * @return $this
     */
    public function withSyncedAt(?DateTimeImmutable $syncedAt)
    {
        $this->syncedAt = $syncedAt;

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

    public function build(): OrderUpdateSyncInfoAction
    {
        return new OrderUpdateSyncInfoActionModel(
            $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel,
            $this->externalId,
            $this->syncedAt
        );
    }

    public static function of(): OrderUpdateSyncInfoActionBuilder
    {
        return new self();
    }
}
