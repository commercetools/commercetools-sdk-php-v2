<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\SyncInfo;
use Commercetools\History\Models\Common\SyncInfoBuilder;

/**
 * @implements Builder<UpdateSyncInfoChange>
 */
final class UpdateSyncInfoChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|SyncInfo|SyncInfoBuilder
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $channelId;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|SyncInfo
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof SyncInfoBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|string
     */
    public function getChannelId()
    {
        return $this->channelId;
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
     * @param ?SyncInfo $nextValue
     * @return $this
     */
    public function withNextValue(?SyncInfo $nextValue)
    {
        $this->nextValue = $nextValue;

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
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?SyncInfoBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): UpdateSyncInfoChange
    {
        return new UpdateSyncInfoChangeModel(
            $this->change,
            $this->nextValue instanceof SyncInfoBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->channelId
        );
    }

    public static function of(): UpdateSyncInfoChangeBuilder
    {
        return new self();
    }
}
