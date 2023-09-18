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
 * @implements Builder<CustomerGroupCustomFieldChangedMessagePayload>
 */
final class CustomerGroupCustomFieldChangedMessagePayloadBuilder implements Builder
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
    private $oldValue;

    /**
     * <p>Name of the Custom Field that changed.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> after the <a href="ctp:api:type:CustomerGroupSetCustomFieldAction">Set CustomField</a> update action.</p>
     *

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> before the <a href="ctp:api:type:CustomerGroupSetCustomFieldAction">Set CustomField</a> update action.</p>
     *

     * @return null|mixed
     */
    public function getOldValue()
    {
        return $this->oldValue;
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
     * @param mixed $oldValue
     * @return $this
     */
    public function withOldValue($oldValue)
    {
        $this->oldValue = $oldValue;

        return $this;
    }


    public function build(): CustomerGroupCustomFieldChangedMessagePayload
    {
        return new CustomerGroupCustomFieldChangedMessagePayloadModel(
            $this->name,
            $this->value,
            $this->oldValue
        );
    }

    public static function of(): CustomerGroupCustomFieldChangedMessagePayloadBuilder
    {
        return new self();
    }
}
