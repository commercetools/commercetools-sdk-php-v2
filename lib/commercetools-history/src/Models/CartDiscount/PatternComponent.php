<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface PatternComponent extends JsonObject
{

    public const FIELD_TYPE = 'type';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;
}
