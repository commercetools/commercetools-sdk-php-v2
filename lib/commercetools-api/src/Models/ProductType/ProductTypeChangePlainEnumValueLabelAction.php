<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeChangePlainEnumValueLabelAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_NEW_VALUE = 'newValue';

    /**
     * <p>Name of the AttributeDefinition to update.</p>
     *
     * @return null|string
     */
    public function getAttributeName();

    /**
     * <p>New value to set. Must be different from the existing value.</p>
     *
     * @return null|AttributePlainEnumValue
     */
    public function getNewValue();

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;

    /**
     * @param ?AttributePlainEnumValue $newValue
     */
    public function setNewValue(?AttributePlainEnumValue $newValue): void;
}
