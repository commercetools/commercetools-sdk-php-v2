<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface UpdateSyncInfoChange extends Change
{

    public const FIELD_CHANNEL_ID = 'channelId';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>updateSyncInfo</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getChannelId();

    /**
     * @return null|SyncInfo
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $channelId
     */
    public function setChannelId(?string $channelId): void;

    /**
     * @param ?SyncInfo $nextValue
     */
    public function setNextValue(?SyncInfo $nextValue): void;
}
