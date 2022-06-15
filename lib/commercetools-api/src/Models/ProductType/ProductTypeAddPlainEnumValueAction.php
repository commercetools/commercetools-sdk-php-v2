<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeAddPlainEnumValueAction extends ProductTypeUpdateAction
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
     * @return null|AttributePlainEnumValue
     */
    public function getValue();

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;

    /**
     * @param ?AttributePlainEnumValue $value
     */
    public function setValue(?AttributePlainEnumValue $value): void;
}
