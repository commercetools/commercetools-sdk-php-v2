<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;

interface KeyReference extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'typeId';
    const FIELD_TYPE_ID = 'typeId';
    const FIELD_KEY = 'key';

    /**
     * @return null|string
     */
    public function getTypeId();

    /**
     * @return null|string
     */
    public function getKey();

    public function setTypeId(?string $typeId): void;

    public function setKey(?string $key): void;
}
