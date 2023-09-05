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
 * @implements Builder<StagedOrderSetDeliveryAddressAction>
 */
final class StagedOrderSetDeliveryAddressActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $deliveryId;

    /**

     * @var ?string
     */
    private $deliveryKey;

    /**

     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $address;

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * <p><code>key</code> of an existing <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getDeliveryKey()
    {
        return $this->deliveryKey;
    }

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress()
    {
        return $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address;
    }

    /**
     * @param ?string $deliveryId
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    /**
     * @param ?string $deliveryKey
     * @return $this
     */
    public function withDeliveryKey(?string $deliveryKey)
    {
        $this->deliveryKey = $deliveryKey;

        return $this;
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

    public function build(): StagedOrderSetDeliveryAddressAction
    {
        return new StagedOrderSetDeliveryAddressActionModel(
            $this->deliveryId,
            $this->deliveryKey,
            $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address
        );
    }

    public static function of(): StagedOrderSetDeliveryAddressActionBuilder
    {
        return new self();
    }
}
