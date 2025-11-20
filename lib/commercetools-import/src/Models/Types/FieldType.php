<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Types;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface FieldType extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'name';
    public const FIELD_NAME = 'name';

    /**
     * <p>Discriminator that determines the type of the field.
     * This value can't be changed after you import the Type.</p>
     *

     * @return null|string
     */
    public function getName();
}
