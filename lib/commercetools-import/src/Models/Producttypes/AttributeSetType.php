<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface AttributeSetType extends AttributeType
{

    public const FIELD_ELEMENT_TYPE = 'elementType';

    /**
     * @return null|AttributeType
     */
    public function getElementType();

    public function setElementType(?AttributeType $elementType): void;
}
