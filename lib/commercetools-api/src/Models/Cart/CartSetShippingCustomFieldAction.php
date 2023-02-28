<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetShippingCustomFieldAction extends CartUpdateAction
{
    public const FIELD_SHIPPING_KEY = 'shippingKey';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * <p>The <code>shippingKey</code> of the <a href="ctp:api:type:Shipping">Shipping</a> to customize. Used to specify which Shipping Method to customize
     * on a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Leave this empty to customize the one and only ShippingMethod on a <code>Single</code> ShippingMode Cart.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>If <code>value</code> is absent or <code>null</code>, this field will be removed if it exists.
     * Trying to remove a field that does not exist will fail with an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error.
     * If <code>value</code> is provided, it is set for the field defined by <code>name</code>.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
