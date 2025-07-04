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
     * <p>Name of the field type. Must be unique for a given <a href="ctp:import:type:ResourceTypeId">ResourceTypeId</a>. In case there is a FieldDefinition with the same <code>name</code> in another Type, both FieldDefinitions must have the same <code>type</code>. This value cannot be changed after the Type is imported.</p>
     *

     * @return null|string
     */
    public function getName();
}
