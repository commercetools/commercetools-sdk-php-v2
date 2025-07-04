<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface UnresolvedReferences extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_TYPE_ID = 'typeId';

    /**
     * <p><code>key</code> of the unresolved resource.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Type of the unresolved resource.</p>
     *

     * @return null|string
     */
    public function getTypeId();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $typeId
     */
    public function setTypeId(?string $typeId): void;
}
