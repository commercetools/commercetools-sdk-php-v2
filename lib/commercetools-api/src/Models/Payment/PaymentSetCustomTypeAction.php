<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;

interface PaymentSetCustomTypeAction extends PaymentUpdateAction
{
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     * <p>If set, the custom type is set to this new value.
     * If absent, the custom type and any existing custom fields are removed.</p>.
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>Sets the custom fields to this value.</p>.
     *
     * @return null|FieldContainer
     */
    public function getFields();

    public function setType(?TypeResourceIdentifier $type): void;

    public function setFields(?FieldContainer $fields): void;
}
