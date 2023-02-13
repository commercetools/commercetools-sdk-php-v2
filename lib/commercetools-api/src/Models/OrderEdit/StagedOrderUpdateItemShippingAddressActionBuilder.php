<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderUpdateItemShippingAddressAction>
 */
final class StagedOrderUpdateItemShippingAddressActionBuilder implements Builder
{
    /**

     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $address;

    /**
     * <p>Polymorphic base type that represents a postal address and contact details.
     * Depending on the read or write action, it can be either <a href="ctp:api:type:Address">Address</a> or <a href="ctp:api:type:AddressDraft">AddressDraft</a> that
     * only differ in the data type for the optional <code>custom</code> field.</p>
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

    public function build(): StagedOrderUpdateItemShippingAddressAction
    {
        return new StagedOrderUpdateItemShippingAddressActionModel(
            $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address
        );
    }

    public static function of(): StagedOrderUpdateItemShippingAddressActionBuilder
    {
        return new self();
    }
}
