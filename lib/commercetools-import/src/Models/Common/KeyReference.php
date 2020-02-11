<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface KeyReference extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'typeId';
    public const FIELD_KEY = 'key';
    public const FIELD_TYPE_ID = 'typeId';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The type of the referenced resource.</p>
     *
     * @return null|string
     */
    public function getTypeId();

    public function setKey(?string $key): void;
}
