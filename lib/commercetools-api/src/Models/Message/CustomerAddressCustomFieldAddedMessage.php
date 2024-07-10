<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerAddressCustomFieldAddedMessage extends Message
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';
    public const FIELD_ADDRESS_ID = 'addressId';

    /**
     * <p>Name of the Custom Field that was added.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>The added <a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a>.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> to which the Custom Field was added.</p>
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
     * @param ?string $addressId
     */
    public function setAddressId(?string $addressId): void;
}
