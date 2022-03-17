<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomFields extends JsonObject
{
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * <p>Reference to the <a href="ctp:api:type:Type">Type</a> that holds the <a href="ctp:api:type:FieldDefinition">FieldDefinitions</a> for the Custom Fields.</p>
     *
     * @return null|TypeReference
     */
    public function getType();

    /**
     * <p>Object containing the Custom Fields for the <a href="/../api/projects/types#list-of-customizable-data-types">customized resource or data type</a>.</p>
     *
     * @return null|FieldContainer
     */
    public function getFields();

    /**
     * @param ?TypeReference $type
     */
    public function setType(?TypeReference $type): void;

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void;
}
