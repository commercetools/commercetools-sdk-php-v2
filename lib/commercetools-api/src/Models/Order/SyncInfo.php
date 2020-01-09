<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface SyncInfo extends JsonObject
{
    const FIELD_CHANNEL = 'channel';
    const FIELD_EXTERNAL_ID = 'externalId';
    const FIELD_SYNCED_AT = 'syncedAt';

    /**
     * <p>Connection to a particular synchronization destination.</p>
     *
     * @return null|ChannelReference
     */
    public function getChannel();

    /**
     * <p>Can be used to reference an external order instance, file etc.</p>
     *
     * @return null|string
     */
    public function getExternalId();

    /**
     * @return null|DateTimeImmutable
     */
    public function getSyncedAt();

    public function setChannel(?ChannelReference $channel): void;

    public function setExternalId(?string $externalId): void;

    public function setSyncedAt(?DateTimeImmutable $syncedAt): void;
}
