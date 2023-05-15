<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Types;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomFieldSetType extends FieldType
{
    public const FIELD_ELEMENT_TYPE = 'elementType';

    /**
     * <p>Field type of the elements in the set.</p>
     *

     * @return null|FieldType
     */
    public function getElementType();

    /**
     * @param ?FieldType $elementType
     */
    public function setElementType(?FieldType $elementType): void;
}
