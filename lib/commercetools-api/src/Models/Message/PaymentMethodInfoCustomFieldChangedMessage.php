<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodInfoCustomFieldChangedMessage extends Message
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * <p>Name of the Custom Field that changed.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> after the <a href="ctp:api:type:PaymentSetMethodInfoCustomFieldAction">Set CustomField</a> update action.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
