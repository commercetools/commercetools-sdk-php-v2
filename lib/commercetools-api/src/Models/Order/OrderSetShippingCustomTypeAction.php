<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetShippingCustomTypeAction extends OrderUpdateAction
{
    public const FIELD_SHIPPING_KEY = 'shippingKey';
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * <p>The <code>shippingKey</code> of the <a href="ctp:api:type:Shipping">Shipping</a> to customize. Used to specify which Shipping Method to customize
     * on a Order with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Leave this empty to customize the one and only ShippingMethod on a <code>Single</code> ShippingMode Order.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the specified ShippingMethod with <a href="/../api/projects/custom-fields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the ShippingMethod.</p>
     *

     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> fields for the <code>shippingMethod</code>.</p>
     *

     * @return null|FieldContainer
     */
    public function getFields();

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;

    /**
     * @param ?TypeResourceIdentifier $type
     */
    public function setType(?TypeResourceIdentifier $type): void;

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void;
}
