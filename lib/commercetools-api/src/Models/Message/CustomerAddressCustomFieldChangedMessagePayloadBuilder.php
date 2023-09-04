<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerAddressCustomFieldChangedMessagePayload>
 */
final class CustomerAddressCustomFieldChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var null|mixed|mixed
     */
    private $value;

    /**

     * @var null|mixed|mixed
     */
    private $previousValue;

    /**
     * <p>Name of the Custom Field that has been changed.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> after the <a href="ctp:api:type:CustomerSetAddressCustomFieldAction">Set Custom Field</a> update action.</p>
     *

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> before the <a href="ctp:api:type:CustomerSetAddressCustomFieldAction">Set CustomField</a> update action.
     * When there has not been a Custom Field with the <code>name</code> on the Customer Address before, a <a href="ctp:api:type:CustomerAddressCustomFieldAddedMessage">Customer Address Custom Field Added</a> Message is generated instead.</p>
     *

     * @return null|mixed
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function withValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param mixed $previousValue
     * @return $this
     */
    public function withPreviousValue($previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }


    public function build(): CustomerAddressCustomFieldChangedMessagePayload
    {
        return new CustomerAddressCustomFieldChangedMessagePayloadModel(
            $this->name,
            $this->value,
            $this->previousValue
        );
    }

    public static function of(): CustomerAddressCustomFieldChangedMessagePayloadBuilder
    {
        return new self();
    }
}
