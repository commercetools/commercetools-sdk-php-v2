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
     * <p>Last seen version of the resource.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the resource was last deleted.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getModifiedAt();

    /**
     * <p><code>true</code> if the <code>dataErasure</code> <a href="/../api/gdpr#data-erasure-of-personal-data">parameter</a> on the <code>DELETE</code> request was set to <code>true</code>.</p>
     *

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
