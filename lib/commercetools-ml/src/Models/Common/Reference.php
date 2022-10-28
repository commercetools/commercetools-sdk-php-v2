<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
