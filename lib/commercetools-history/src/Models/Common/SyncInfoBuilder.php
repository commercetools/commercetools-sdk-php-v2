<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SyncInfo>
 */
final class SyncInfoBuilder implements Builder
{
    /**
     * @var null|Reference|ReferenceBuilder
     */
    private $channel;

    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @var ?string
     */
    private $syncedAt;

    /**
     * @return null|Reference
     */
    public function getChannel()
    {
        return $this->channel instanceof ReferenceBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * <p>Can be used to reference an external order instance, file etc.</p>
     *
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @return null|string
     */
    public function getSyncedAt()
    {
        return $this->syncedAt;
    }

    /**
     * @param ?Reference $channel
     * @return $this
     */
    public function withChannel(?Reference $channel)
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
     * @param ?string $syncedAt
     * @return $this
     */
    public function withSyncedAt(?string $syncedAt)
    {
        $this->syncedAt = $syncedAt;

        return $this;
    }

    /**
     * @deprecated use withChannel() instead
     * @return $this
     */
    public function withChannelBuilder(?ReferenceBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    public function build(): SyncInfo
    {
        return new SyncInfoModel(
            $this->channel instanceof ReferenceBuilder ? $this->channel->build() : $this->channel,
            $this->externalId,
            $this->syncedAt
        );
    }

    public static function of(): SyncInfoBuilder
    {
        return new self();
    }
}
