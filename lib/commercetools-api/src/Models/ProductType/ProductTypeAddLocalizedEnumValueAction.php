<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductTypeAddLocalizedEnumValueAction extends ProductTypeUpdateAction
{

    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getAttributeName();

    /**
     * @return null|AttributeLocalizedEnumValue
     */
    public function getValue();

    public function setAttributeName(?string $attributeName): void;

    public function setValue(?AttributeLocalizedEnumValue $value): void;
}
