<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomFields extends JsonObject
{

    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * @return null|TypeReference
     */
    public function getType();

    /**
     * <p>A valid JSON object, based on FieldDefinition.</p>
     *
     * @return null|FieldContainer
     */
    public function getFields();

    public function setType(?TypeReference $type): void;

    public function setFields(?FieldContainer $fields): void;
}
