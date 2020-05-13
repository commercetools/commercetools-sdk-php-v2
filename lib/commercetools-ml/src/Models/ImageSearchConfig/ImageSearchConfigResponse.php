<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ImageSearchConfigResponse extends JsonObject
{
    public const FIELD_STATUS = 'status';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**
     * <p>The image search activation status.</p>
     *
     * @return null|string
     */
    public function getStatus();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    public function setStatus(?string $status): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
}
