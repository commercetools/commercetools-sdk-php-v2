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
 * @implements Builder<BusinessUnitAddressCustomFieldAddedMessagePayload>
 */
final class BusinessUnitAddressCustomFieldAddedMessagePayloadBuilder implements Builder
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

     * @var ?string
     */
    private $addressId;

    /**
     * <p>Name of the Custom Field that was added.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>The added <a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a>.</p>
     *

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> to which the Custom Field was added.</p>
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
     * @param ?string $addressId
     * @return $this
     */
    public function withAddressId(?string $addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }


    public function build(): BusinessUnitAddressCustomFieldAddedMessagePayload
    {
        return new BusinessUnitAddressCustomFieldAddedMessagePayloadModel(
            $this->name,
            $this->value,
            $this->addressId
        );
    }

    public static function of(): BusinessUnitAddressCustomFieldAddedMessagePayloadBuilder
    {
        return new self();
    }
}
