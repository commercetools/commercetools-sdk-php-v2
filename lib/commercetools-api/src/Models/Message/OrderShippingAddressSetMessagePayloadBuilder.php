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
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;

/**
 * @implements Builder<OrderShippingAddressSetMessagePayload>
 */
final class OrderShippingAddressSetMessagePayloadBuilder implements Builder
{
    /**
     * @var null|Address|AddressBuilder
     */
    private $address;

    /**
     * @var null|Address|AddressBuilder
     */
    private $oldAddress;

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        return $this->address instanceof AddressBuilder ? $this->address->build() : $this->address;
    }

    /**
     * @return null|Address
     */
    public function getOldAddress()
    {
        return $this->oldAddress instanceof AddressBuilder ? $this->oldAddress->build() : $this->oldAddress;
    }

    /**
     * @return $this
     */
    public function withAddress(?Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldAddress(?Address $oldAddress)
    {
        $this->oldAddress = $oldAddress;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldAddressBuilder(?AddressBuilder $oldAddress)
    {
        $this->oldAddress = $oldAddress;

        return $this;
    }

    public function build(): OrderShippingAddressSetMessagePayload
    {
        return new OrderShippingAddressSetMessagePayloadModel(
            $this->address instanceof AddressBuilder ? $this->address->build() : $this->address,
            $this->oldAddress instanceof AddressBuilder ? $this->oldAddress->build() : $this->oldAddress
        );
    }

    public static function of(): OrderShippingAddressSetMessagePayloadBuilder
    {
        return new self();
    }
}
