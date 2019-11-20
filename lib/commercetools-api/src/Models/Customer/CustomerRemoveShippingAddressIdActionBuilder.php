<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerRemoveShippingAddressIdAction>
 */
final class CustomerRemoveShippingAddressIdActionBuilder implements Builder
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

    public function build(): CustomerRemoveShippingAddressIdAction
    {
        return new CustomerRemoveShippingAddressIdActionModel(
            $this->addressId
        );
    }

    public static function of(): CustomerRemoveShippingAddressIdActionBuilder
    {
        return new self();
    }
}
