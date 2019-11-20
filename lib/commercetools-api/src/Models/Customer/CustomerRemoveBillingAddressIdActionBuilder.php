<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerRemoveBillingAddressIdAction>
 */
final class CustomerRemoveBillingAddressIdActionBuilder implements Builder
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

    public function build(): CustomerRemoveBillingAddressIdAction
    {
        return new CustomerRemoveBillingAddressIdActionModel(
            $this->addressId
        );
    }

    public static function of(): CustomerRemoveBillingAddressIdActionBuilder
    {
        return new self();
    }
}
