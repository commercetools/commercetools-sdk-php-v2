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

interface OrderSetBillingAddressCustomTypeAction extends OrderUpdateAction
{
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the <code>billingAddress</code> with <a href="/../api/projects/custom-fields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the <code>billingAddress</code>.</p>
     *

     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> fields for the <code>billingAddress</code>.</p>
     *

     * @return null|FieldContainer
     */
    public function getFields();

    /**
     * @param ?TypeResourceIdentifier $type
     */
    public function setType(?TypeResourceIdentifier $type): void;

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void;
}
