<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCustomerChangeAddressAction>
 */
final class MyCustomerChangeAddressActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $addressId;

    /**
     * @var ?string
     */
    private $addressKey;

    /**
     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $address;

    /**
     * @return null|string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * @return null|string
     */
    public function getAddressKey()
    {
        return $this->addressKey;
    }

    /**
     * @return null|BaseAddress
     */
    public function getAddress()
    {
        return $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address;
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
     * @param ?string $addressKey
     * @return $this
     */
    public function withAddressKey(?string $addressKey)
    {
        $this->addressKey = $addressKey;

        return $this;
    }

    /**
     * @param ?BaseAddress $address
     * @return $this
     */
    public function withAddress(?BaseAddress $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddressBuilder(?BaseAddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    public function build(): MyCustomerChangeAddressAction
    {
        return new MyCustomerChangeAddressActionModel(
            $this->addressId,
            $this->addressKey,
            $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address
        );
    }

    public static function of(): MyCustomerChangeAddressActionBuilder
    {
        return new self();
    }
}
