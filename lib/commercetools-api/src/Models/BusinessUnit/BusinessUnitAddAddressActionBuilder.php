<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitAddAddressAction>
 */
final class BusinessUnitAddAddressActionBuilder implements Builder
{
    /**

     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $address;

    /**
     * <p>Address to add to the addresses of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress()
    {
        return $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address;
    }

    /**
     * @param ?BaseAddress $address
     * @return $this
     */
    public function withAddress(?BaseAddress $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @deprecated use withAddress() instead
     * @return $this
     */
    public function withAddressBuilder(?BaseAddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    public function build(): BusinessUnitAddAddressAction
    {
        return new BusinessUnitAddAddressActionModel(
            $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address
        );
    }

    public static function of(): BusinessUnitAddAddressActionBuilder
    {
        return new self();
    }
}
