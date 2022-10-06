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
 * @implements Builder<BusinessUnitDefaultShippingAddressSetMessagePayload>
 */
final class BusinessUnitDefaultShippingAddressSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|Address|AddressBuilder
     */
    private $address;

    /**
     * <p>The address that was set as the default shipping address.</p>
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

    public function build(): BusinessUnitDefaultShippingAddressSetMessagePayload
    {
        return new BusinessUnitDefaultShippingAddressSetMessagePayloadModel(
            $this->address instanceof AddressBuilder ? $this->address->build() : $this->address
        );
    }

    public static function of(): BusinessUnitDefaultShippingAddressSetMessagePayloadBuilder
    {
        return new self();
    }
}
