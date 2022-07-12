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

interface ResourceDeletedDeliveryPayload extends DeliveryPayload
{
    public const FIELD_VERSION = 'version';
    public const FIELD_MODIFIED_AT = 'modifiedAt';
    public const FIELD_DATA_ERASURE = 'dataErasure';

    /**

     * @return null|int
     */
    public function getVersion();

    /**

     * @return null|DateTimeImmutable
     */
    public function getModifiedAt();

    /**

     * @return null|bool
     */
    public function getDataErasure();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $modifiedAt
     */
    public function setModifiedAt(?DateTimeImmutable $modifiedAt): void;

    /**
     * @param ?bool $dataErasure
     */
    public function setDataErasure(?bool $dataErasure): void;
}
