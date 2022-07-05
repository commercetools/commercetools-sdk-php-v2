<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Suggestion extends JsonObject
{
    public const FIELD_TEXT = 'text';

    /**
     * <p>The suggested text.</p>
     *

     * @return null|string
     */
    public function getText();

    /**
     * @param ?string $text
     */
    public function setText(?string $text): void;
}
