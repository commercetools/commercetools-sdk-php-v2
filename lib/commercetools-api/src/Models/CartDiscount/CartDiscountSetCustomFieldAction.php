<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;

interface CartDiscountSetCustomFieldAction extends CartDiscountUpdateAction
{
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getName();

    /**
     * <p>If <code>value</code> is absent or <code>null</code>, this field will be removed if it exists.
     * Trying to remove a field that does not exist will fail with an <code>InvalidOperation</code> error.
     * If <code>value</code> is provided, set the <code>value</code> of the field defined by the <code>name</code>.
     * The FieldDefinition determines the format for the <code>value</code> to be provided.</p>.
     *
     * @return null|JsonObject
     */
    public function getValue();

    public function setName(?string $name): void;

    public function setValue(?JsonObject $value): void;
}
