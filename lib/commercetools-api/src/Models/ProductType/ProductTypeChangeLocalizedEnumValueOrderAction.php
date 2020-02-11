<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductTypeChangeLocalizedEnumValueOrderAction extends ProductTypeUpdateAction
{

    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_VALUES = 'values';

    /**
     * @return null|string
     */
    public function getAttributeName();

    /**
     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues();

    public function setAttributeName(?string $attributeName): void;

    public function setValues(?AttributeLocalizedEnumValueCollection $values): void;
}
