<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Reference extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_TYPE_ID = 'typeId';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getTypeId();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $typeId
     */
    public function setTypeId(?string $typeId): void;
}
