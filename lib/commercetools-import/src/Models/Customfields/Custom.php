<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\TypeKeyReference;

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
