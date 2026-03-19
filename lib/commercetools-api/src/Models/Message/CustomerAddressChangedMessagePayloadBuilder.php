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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerAddressChangedMessagePayload>
 */
final class CustomerAddressChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|Address|AddressBuilder
     */
    private $address;

    /**

     * @var ?array
     */
    private $addressRoles;

    /**
     * <p><a href="ctp:api:type:Address">Address</a> that was set during the <a href="ctp:api:type:CustomerChangeAddressAction">Change Address</a> update action.</p>
     *

     * @return null|Address
     */
    public function getAddress()
    {
        return $this->address instanceof AddressBuilder ? $this->address->build() : $this->address;
    }

    /**
     * <p>Indicates if the address was used for shipping or billing purposes.</p>
     *

     * @return null|array
     */
    public function getAddressRoles()
    {
        return $this->addressRoles;
    }

    /**
     * @param ?Address $address
     * @return $this
     */
    public function withAddress(?Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param ?array $addressRoles
     * @return $this
     */
    public function withAddressRoles(?array $addressRoles)
    {
        $this->addressRoles = $addressRoles;

        return $this;
    }

    /**
     * @deprecated use withAddress() instead
     * @return $this
     */
    public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    public function build(): CustomerAddressChangedMessagePayload
    {
        return new CustomerAddressChangedMessagePayloadModel(
            $this->address instanceof AddressBuilder ? $this->address->build() : $this->address,
            $this->addressRoles
        );
    }

    public static function of(): CustomerAddressChangedMessagePayloadBuilder
    {
        return new self();
    }
}
