<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Products;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface SuggestTokenizer extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';

    /**
     * @return null|string
     */
    public function getType();

}
