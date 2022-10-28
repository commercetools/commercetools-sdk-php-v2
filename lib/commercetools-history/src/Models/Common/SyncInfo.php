<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SyncInfo extends JsonObject
{

    public const FIELD_CHANNEL = 'channel';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_SYNCED_AT = 'syncedAt';

    /**

     * @return null|Reference
     */
    public function getChannel();

    /**
     * <p>Can be used to reference an external order instance, file etc.</p>
     *

     * @return null|string
     */
    public function getExternalId();

    /**

     * @return null|string
     */
    public function getSyncedAt();

    /**
     * @param ?Reference $channel
     */
    public function setChannel(?Reference $channel): void;

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

    /**
     * @param ?string $syncedAt
     */
    public function setSyncedAt(?string $syncedAt): void;
}
