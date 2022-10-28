<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface StagedOrderUpdateSyncInfoAction extends StagedOrderUpdateAction
{
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_SYNCED_AT = 'syncedAt';

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

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

    /**
     * @param ?ChannelResourceIdentifier $channel
     */
    public function setChannel(?ChannelResourceIdentifier $channel): void;

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

    /**
     * @param ?DateTimeImmutable $syncedAt
     */
    public function setSyncedAt(?DateTimeImmutable $syncedAt): void;
}
