<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Reference extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'typeId';
    public const FIELD_TYPE_ID = 'typeId';
    public const FIELD_ID = 'id';

    /**
     * @return null|string
     */
    public function getTypeId();

    /**
     * @return null|string
     */
    public function getId();

    public function setId(?string $id): void;
}
