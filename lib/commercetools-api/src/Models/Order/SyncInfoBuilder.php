<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<SyncInfo>
 */
final class SyncInfoBuilder implements Builder
{
    /**
     * @var ChannelReference|?ChannelReferenceBuilder
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

    public function __construct()
    {
    }

    /**
     * @return null|ChannelReference
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel;
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
    public function withChannel(?ChannelReference $channel)
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
    public function withChannelBuilder(?ChannelReferenceBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    public function build(): SyncInfo
    {
        return new SyncInfoModel(
            ($this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel),
            $this->externalId,
            $this->syncedAt
        );
    }

    public static function of(): SyncInfoBuilder
    {
        return new self();
    }
}
