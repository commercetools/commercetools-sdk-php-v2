<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantSetKeyAction extends VariantUpdateAction
{
    public const FIELD_KEY = 'key';

    /**
     * <p>Value to set. Must be unique.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
