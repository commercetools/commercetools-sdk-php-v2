<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetItemShippingAddressCustomFieldAction extends CartUpdateAction
{
    public const FIELD_ADDRESS_KEY = 'addressKey';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Address">Address</a> in <code>itemShippingAddress</code>.</p>
     *

     * @return null|string
     */
    public function getAddressKey();

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>If <code>value</code> is absent or <code>null</code>, this field will be removed if it exists.
     * Removing a field that does not exist returns an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error.
     * If <code>value</code> is provided, it is set for the field defined by <code>name</code>.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
