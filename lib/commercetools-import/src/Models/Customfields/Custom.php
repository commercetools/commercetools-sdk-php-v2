<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Common\TypeKeyReference;

interface Custom extends JsonObject
{

    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * <p>The type that provides the field definitions for this object.</p>
     *
     * @return null|TypeKeyReference
     */
    public function getType();

    /**
     * <p>The custom fields of this object.</p>
     *
     * @return null|FieldContainer
     */
    public function getFields();

    public function setType(?TypeKeyReference $type): void;

    public function setFields(?FieldContainer $fields): void;
}
