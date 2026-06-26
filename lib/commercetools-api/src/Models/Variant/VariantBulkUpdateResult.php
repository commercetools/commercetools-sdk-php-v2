<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantBulkUpdateResult extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'status';
    public const FIELD_ID = 'id';
    public const FIELD_KEY = 'key';
    public const FIELD_STATUS = 'status';

    /**
     * <p>Unique identifier of the Variant from the request. Present when the Variant was identified by <code>id</code>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>User-defined unique identifier of the Variant from the request. Present when the Variant was identified by <code>key</code>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Indicates whether the update succeeded or failed.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
