<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OrderUpdateSyncInfoAction extends OrderUpdateAction
{
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_SYNCED_AT = 'syncedAt';

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getChannel();

    /**
     * @return null|string
     */
    public function getExternalId();

    /**
     * @return null|DateTimeImmutable
     */
    public function getSyncedAt();

    public function setChannel(?ChannelResourceIdentifier $channel): void;

    public function setExternalId(?string $externalId): void;

    public function setSyncedAt(?DateTimeImmutable $syncedAt): void;
}
