<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderUpdateItemShippingAddressAction>
 */
final class StagedOrderUpdateItemShippingAddressActionBuilder implements Builder
{
    /**
     * @var Address|?AddressBuilder
     */
    private $address;

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
    public function withAddress(?Address $address)
    {
        $this->address = $address;

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

    public function build(): StagedOrderUpdateItemShippingAddressAction
    {
        return new StagedOrderUpdateItemShippingAddressActionModel(
            ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address)
        );
    }

    public static function of(): StagedOrderUpdateItemShippingAddressActionBuilder
    {
        return new self();
    }
}
