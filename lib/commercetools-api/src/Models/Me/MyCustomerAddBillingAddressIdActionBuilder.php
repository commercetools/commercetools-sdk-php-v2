<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyCustomerAddBillingAddressIdAction>
 */
final class MyCustomerAddBillingAddressIdActionBuilder implements Builder
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

    public function build(): MyCustomerAddBillingAddressIdAction
    {
        return new MyCustomerAddBillingAddressIdActionModel(
            $this->addressId
        );
    }

    public static function of(): MyCustomerAddBillingAddressIdActionBuilder
    {
        return new self();
    }
}
