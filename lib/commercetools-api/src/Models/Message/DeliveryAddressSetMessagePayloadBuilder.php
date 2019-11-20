<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<DeliveryAddressSetMessagePayload>
 */
final class DeliveryAddressSetMessagePayloadBuilder implements Builder
{
    /**
     * @var Address|?AddressBuilder
     */
    private $oldAddress;

    /**
     * @var ?string
     */
    private $deliveryId;

    /**
     * @var Address|?AddressBuilder
     */
    private $address;

    /**
     * @return null|Address
     */
    public function getOldAddress()
    {
        return $this->oldAddress instanceof AddressBuilder ? $this->oldAddress->build() : $this->oldAddress;
    }

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        return $this->address instanceof AddressBuilder ? $this->address->build() : $this->address;
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
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
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
    public function withOldAddressBuilder(?AddressBuilder $oldAddress)
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

    public function build(): DeliveryAddressSetMessagePayload
    {
        return new DeliveryAddressSetMessagePayloadModel(
            ($this->oldAddress instanceof AddressBuilder ? $this->oldAddress->build() : $this->oldAddress),
            $this->deliveryId,
            ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address)
        );
    }

    public static function of(): DeliveryAddressSetMessagePayloadBuilder
    {
        return new self();
    }
}
