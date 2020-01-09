<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<StagedOrderUpdateSyncInfoAction>
 */
final class StagedOrderUpdateSyncInfoActionBuilder implements Builder
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
     * @return $this
     */
    public function withChannel(?ChannelResourceIdentifier $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSyncedAt(?DateTimeImmutable $syncedAt)
    {
        $this->syncedAt = $syncedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannelBuilder(?ChannelResourceIdentifierBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    public function build(): StagedOrderUpdateSyncInfoAction
    {
        return new StagedOrderUpdateSyncInfoActionModel(
            $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel,
            $this->externalId,
            $this->syncedAt
        );
    }

    public static function of(): StagedOrderUpdateSyncInfoActionBuilder
    {
        return new self();
    }
}
