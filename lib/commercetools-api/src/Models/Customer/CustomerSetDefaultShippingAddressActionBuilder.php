<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerSetDefaultShippingAddressAction>
 */
final class CustomerSetDefaultShippingAddressActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $addressId;

    /**
     * @return null|string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * @return $this
     */
    public function withAddressId(?string $addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    public function build(): CustomerSetDefaultShippingAddressAction
    {
        return new CustomerSetDefaultShippingAddressActionModel(
            $this->addressId
        );
    }

    public static function of(): CustomerSetDefaultShippingAddressActionBuilder
    {
        return new self();
    }
}
