<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitAddressCustomFieldChangedMessagePayload extends MessagePayload
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';
    public const FIELD_OLD_VALUE = 'oldValue';

    /**
     * <p>Name of the Custom Field that changed.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> after the <a href="ctp:api:type:BusinessUnitSetAddressCustomFieldAction">Set CustomField</a> update action.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> before the <a href="ctp:api:type:BusinessUnitSetAddressCustomFieldAction">Set CustomField</a> update action.</p>
     *

     * @return null|mixed
     */
    public function getOldValue();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;

    /**
     * @param mixed $oldValue
     */
    public function setOldValue($oldValue): void;
}
