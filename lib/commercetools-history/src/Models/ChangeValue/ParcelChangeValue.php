<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ParcelChangeValue extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'createdAt';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getCreatedAt();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $createdAt
     */
    public function setCreatedAt(?string $createdAt): void;
}
