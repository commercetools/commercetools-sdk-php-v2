<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeAddLocalizedEnumValueAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_VALUE = 'value';

    /**
     * <p>Name of the AttributeDefinition to update.</p>
     *

     * @return null|string
     */
    public function getAttributeName();

    /**
     * <p>Value to append to the array.</p>
     *

     * @return null|AttributeLocalizedEnumValue
     */
    public function getValue();

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;

    /**
     * @param ?AttributeLocalizedEnumValue $value
     */
    public function setValue(?AttributeLocalizedEnumValue $value): void;
}
