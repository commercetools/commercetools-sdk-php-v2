<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface KeyReference extends JsonObject
{

    public const FIELD_KEY = 'key';
    public const FIELD_TYPE_ID = 'typeId';

    /**
     * @return null|string
     */
    public function getKey();

    /**
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
