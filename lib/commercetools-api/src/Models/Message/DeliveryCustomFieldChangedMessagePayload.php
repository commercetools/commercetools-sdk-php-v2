<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryCustomFieldChangedMessagePayload extends OrderMessagePayload
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_DELIVERY_ID = 'deliveryId';

    /**
     * <p>Name of the Custom Field that changed.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> after the <a href="ctp:api:type:OrderSetDeliveryCustomFieldAction">Set CustomField</a> update action.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> before the <a href="ctp:api:type:OrderSetDeliveryCustomFieldAction">Set CustomField</a> update action.
     * When there has not been a Custom Field with the <code>name</code> on the Delivery before, a <a href="ctp:api:type:DeliveryCustomFieldAddedMessage">Delivery Custom Field Added</a> Message is generated instead.</p>
     *

     * @return null|mixed
     */
    public function getPreviousValue();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

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
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;
}
