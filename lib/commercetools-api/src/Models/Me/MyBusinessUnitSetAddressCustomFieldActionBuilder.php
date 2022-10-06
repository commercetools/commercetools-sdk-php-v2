<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyBusinessUnitSetAddressCustomFieldAction>
 */
final class MyBusinessUnitSetAddressCustomFieldActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $addressId;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var null|mixed|mixed
     */
    private $value;

    /**
     * <p>ID of the <code>address</code> to be extended.</p>
     *

     * @return null|string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>If <code>value</code> is absent or <code>null</code>, this field will be removed if it exists.
     * Trying to remove a field that does not exist will fail with an <a href="/../api/errors#general-400-invalid-operation">InvalidOperation</a> error.
     * If <code>value</code> is provided, it is set for the field defined by <code>name</code>.</p>
     *

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
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


    public function build(): MyBusinessUnitSetAddressCustomFieldAction
    {
        return new MyBusinessUnitSetAddressCustomFieldActionModel(
            $this->addressId,
            $this->name,
            $this->value
        );
    }

    public static function of(): MyBusinessUnitSetAddressCustomFieldActionBuilder
    {
        return new self();
    }
}
