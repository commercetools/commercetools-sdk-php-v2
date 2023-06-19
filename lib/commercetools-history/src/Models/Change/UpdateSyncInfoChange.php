<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\SyncInfo;

interface UpdateSyncInfoChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_CHANNEL_ID = 'channelId';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|SyncInfo
     */
    public function getNextValue();

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|string
     */
    public function getChannelId();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?SyncInfo $nextValue
     */
    public function setNextValue(?SyncInfo $nextValue): void;

    /**
     * @param ?string $channelId
     */
    public function setChannelId(?string $channelId): void;
}
