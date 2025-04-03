<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImportContainerDeletedEventData extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_VERSION = 'version';

    /**
     * <p>The <code>key</code> of the deleted Import Container.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The <code>version</code> of the deleted Import Container.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;
}
