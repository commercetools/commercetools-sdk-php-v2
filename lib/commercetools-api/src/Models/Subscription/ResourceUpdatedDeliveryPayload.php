<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ResourceUpdatedDeliveryPayload extends DeliveryPayload
{
    public const FIELD_VERSION = 'version';
    public const FIELD_OLD_VERSION = 'oldVersion';
    public const FIELD_MODIFIED_AT = 'modifiedAt';

    /**
     * <p>Last seen version of the resource.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Version of the resource before the update.</p>
     *

     * @return null|int
     */
    public function getOldVersion();

    /**
     * <p>Date and time (UTC) the resource was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getModifiedAt();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?int $oldVersion
     */
    public function setOldVersion(?int $oldVersion): void;

    /**
     * @param ?DateTimeImmutable $modifiedAt
     */
    public function setModifiedAt(?DateTimeImmutable $modifiedAt): void;
}
