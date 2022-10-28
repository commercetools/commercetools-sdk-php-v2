<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomFields extends JsonObject
{

    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**

     * @return null|Reference
     */
    public function getType();

    /**
     * <p>A valid JSON object, based on FieldDefinition.</p>
     *

     * @return null|mixed
     */
    public function getFields();

    /**
     * @param ?Reference $type
     */
    public function setType(?Reference $type): void;

    /**
     * @param ?JsonObject $fields
     */
    public function setFields(?JsonObject $fields): void;
}
