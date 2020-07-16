<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeAddFieldDefinitionAction extends TypeUpdateAction
{
    public const FIELD_FIELD_DEFINITION = 'fieldDefinition';

    /**
     * @return null|FieldDefinition
     */
    public function getFieldDefinition();

    /**
     * @param ?FieldDefinition $fieldDefinition
     */
    public function setFieldDefinition(?FieldDefinition $fieldDefinition): void;
}
