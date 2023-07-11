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
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_SYNCED_AT = 'syncedAt';

    /**
     * <p>Set this to identify an external order instance, file, or other resource.</p>
     *

     * @return null|string
     */
    public function getExternalId();

    /**
     * <p>The synchronization destination to set. Must not be empty.
     * The referenced Channel must have the <a href="ctp:api:type:ChannelRoleEnum">Channel Role</a> <code>OrderExport</code> or <code>OrderImport</code>.
     * Otherwise this update action returns an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel();

    /**
     * <p>If not set, it defaults to the current date and time.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getSyncedAt();

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

    /**
     * @param ?ChannelResourceIdentifier $channel
     */
    public function setChannel(?ChannelResourceIdentifier $channel): void;

    /**
     * @param ?DateTimeImmutable $syncedAt
     */
    public function setSyncedAt(?DateTimeImmutable $syncedAt): void;
}
