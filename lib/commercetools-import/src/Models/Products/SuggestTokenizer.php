<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\JsonObject;

interface SuggestTokenizer extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'type';
    const FIELD_TYPE = 'type';

    /**
     * @return null|string
     */
    public function getType();

    public function setType(?string $type): void;
}
