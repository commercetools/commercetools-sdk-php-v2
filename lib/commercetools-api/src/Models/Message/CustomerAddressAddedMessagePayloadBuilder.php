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
 * @implements Builder<CustomerAddressAddedMessagePayload>
 */
final class CustomerAddressAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|Address|AddressBuilder
     */
    private $address;

    /**
     * <p><a href="ctp:api:type:Address">Address</a> that was added during the <a href="ctp:api:type:CustomerAddAddressAction">Add Address</a> update action.</p>
     *

     * @return null|Address
     */
    public function getAddress()
    {
        return $this->address instanceof AddressBuilder ? $this->address->build() : $this->address;
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
     * @deprecated use withAddress() instead
     * @return $this
     */
    public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    public function build(): CustomerAddressAddedMessagePayload
    {
        return new CustomerAddressAddedMessagePayloadModel(
            $this->address instanceof AddressBuilder ? $this->address->build() : $this->address
        );
    }

    public static function of(): CustomerAddressAddedMessagePayloadBuilder
    {
        return new self();
    }
}
