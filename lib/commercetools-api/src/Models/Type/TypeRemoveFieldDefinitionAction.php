<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeRemoveFieldDefinitionAction extends TypeUpdateAction
{
    public const FIELD_FIELD_NAME = 'fieldName';

    /**
     * <p><code>name</code> of the <a href="ctp:api:type:FieldDefinition">FieldDefinition</a> to remove.
     * The removal of a FieldDefinition deletes <a href="/../api/general-concepts#eventual-consistency">asynchronously</a> all Custom Fields using the FieldDefinition as well.</p>
     *

     * @return null|string
     */
    public function getFieldName();

    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void;
}
