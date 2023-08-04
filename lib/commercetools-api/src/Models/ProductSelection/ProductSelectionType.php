<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionType extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';

    /**
     * <p>The following types of Product Selections are supported:</p>
     *

     * @return null|string
     */
    public function getType();
}
