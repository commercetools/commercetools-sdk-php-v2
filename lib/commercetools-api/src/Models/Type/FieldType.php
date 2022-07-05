<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface FieldType extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'name';
    public const FIELD_NAME = 'name';

    /**

     * @return null|string
     */
    public function getName();
}
