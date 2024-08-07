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
 * @implements Builder<BusinessUnitAddressCustomFieldChangedMessagePayload>
 */
final class BusinessUnitAddressCustomFieldChangedMessagePayloadBuilder implements Builder
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

     * @var ?string
     */
    private $addressId;

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
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> after the <a href="ctp:api:type:BusinessUnitSetAddressCustomFieldAction">Set CustomField</a> update action.</p>
     *

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <p><a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a> before the <a href="ctp:api:type:BusinessUnitSetAddressCustomFieldAction">Set CustomField</a> update action.</p>
     *

     * @return null|mixed
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> of which the Custom Field was changed.</p>
     *

     * @return null|string
     */
    public function getAddressId()
    {
        return $this->addressId;
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

    /**
     * @param ?string $addressId
     * @return $this
     */
    public function withAddressId(?string $addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }


    public function build(): BusinessUnitAddressCustomFieldChangedMessagePayload
    {
        return new BusinessUnitAddressCustomFieldChangedMessagePayloadModel(
            $this->name,
            $this->value,
            $this->oldValue,
            $this->addressId
        );
    }

    public static function of(): BusinessUnitAddressCustomFieldChangedMessagePayloadBuilder
    {
        return new self();
    }
}
