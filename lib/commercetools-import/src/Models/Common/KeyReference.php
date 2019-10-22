<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\JsonObject;

interface KeyReference extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'typeId';
    const FIELD_KEY = 'key';
    const FIELD_TYPE_ID = 'typeId';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The type of the referenced resource.</p>.
     *
     * @return null|string
     */
    public function getTypeId();

    public function setKey(?string $key): void;

    public function setTypeId(?string $typeId): void;
}
