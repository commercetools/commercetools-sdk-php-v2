<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ChannelKeyReferenceBuilder;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<SyncInfo>
 */
final class SyncInfoBuilder implements Builder
{
    /**
     * @var null|ChannelKeyReference|ChannelKeyReferenceBuilder
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
     * <p>Maps to <code>SyncInfo.channel</code></p>
     *
     * @return null|ChannelKeyReference
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelKeyReferenceBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * <p>Maps to <code>SyncInfo.externalId</code></p>
     *
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * <p>Maps to <code>SyncInfo.syncedAt</code></p>
     *
     * @return null|DateTimeImmutable
     */
    public function getSyncedAt()
    {
        return $this->syncedAt;
    }

    /**
     * @param ?ChannelKeyReference $channel
     * @return $this
     */
    public function withChannel(?ChannelKeyReference $channel)
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
    public function withChannelBuilder(?ChannelKeyReferenceBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    public function build(): SyncInfo
    {
        return new SyncInfoModel(
            $this->channel instanceof ChannelKeyReferenceBuilder ? $this->channel->build() : $this->channel,
            $this->externalId,
            $this->syncedAt
        );
    }

    public static function of(): SyncInfoBuilder
    {
        return new self();
    }
}
