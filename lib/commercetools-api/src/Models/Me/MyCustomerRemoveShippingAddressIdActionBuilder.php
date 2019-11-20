<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyCustomerRemoveShippingAddressIdAction>
 */
final class MyCustomerRemoveShippingAddressIdActionBuilder implements Builder
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

    public function build(): MyCustomerRemoveShippingAddressIdAction
    {
        return new MyCustomerRemoveShippingAddressIdActionModel(
            $this->addressId
        );
    }

    public static function of(): MyCustomerRemoveShippingAddressIdActionBuilder
    {
        return new self();
    }
}
