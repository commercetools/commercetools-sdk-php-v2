<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerAddressCustomFieldChangedMessage extends Message
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_ADDRESS_ID = 'addressId';

    /**
     * <p>Name of the Custom Field that changed.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> after the <a href="ctp:api:type:CustomerSetAddressCustomFieldAction">Set CustomField</a> update action.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> before the <a href="ctp:api:type:CustomerSetAddressCustomFieldAction">Set CustomField</a> update action.
     * When there has not been a Custom Field with the <code>name</code> on the Customer Address before, a <a href="ctp:api:type:CustomerAddressCustomFieldAddedMessage">Customer Address Custom Field Added</a> Message is generated instead.</p>
     *

     * @return null|mixed
     */
    public function getPreviousValue();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> of which the Custom Field was changed.</p>
     *

     * @return null|string
     */
    public function getAddressId();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;

    /**
     * @param mixed $previousValue
     */
    public function setPreviousValue($previousValue): void;

    /**
     * @param ?string $addressId
     */
    public function setAddressId(?string $addressId): void;
}
