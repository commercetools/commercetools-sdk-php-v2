<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use DateTimeImmutable;

interface SyncInfo extends JsonObject
{
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_SYNCED_AT = 'syncedAt';

    /**
     * <p>Maps to <code>SyncInfo.channel</code></p>
     *

     * @return null|ChannelKeyReference
     */
    public function getChannel();

    /**
     * <p>Maps to <code>SyncInfo.externalId</code></p>
     *

     * @return null|string
     */
    public function getExternalId();

    /**
     * <p>Maps to <code>SyncInfo.syncedAt</code></p>
     *

     * @return null|DateTimeImmutable
     */
    public function getSyncedAt();

    /**
     * @param ?ChannelKeyReference $channel
     */
    public function setChannel(?ChannelKeyReference $channel): void;

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

    /**
     * @param ?DateTimeImmutable $syncedAt
     */
    public function setSyncedAt(?DateTimeImmutable $syncedAt): void;
}
