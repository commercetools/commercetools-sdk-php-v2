<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantBulkUpdateResource extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';

    /**
     * <p>Unique identifier of the updated Variant.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>The new version of the Variant after the update.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;
}
