<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<UpdateSyncInfoAction>
 */
final class UpdateSyncInfoActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $channelId;

    /**
     * @var null|SyncInfo|SyncInfoBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>updateSyncInfo</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|string
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @return null|SyncInfo
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof SyncInfoBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?string $channelId
     * @return $this
     */
    public function withChannelId(?string $channelId)
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * @param ?SyncInfo $nextValue
     * @return $this
     */
    public function withNextValue(?SyncInfo $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?SyncInfoBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): UpdateSyncInfoAction
    {
        return new UpdateSyncInfoActionModel(
            $this->change,
            $this->channelId,
            $this->nextValue instanceof SyncInfoBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): UpdateSyncInfoActionBuilder
    {
        return new self();
    }
}
