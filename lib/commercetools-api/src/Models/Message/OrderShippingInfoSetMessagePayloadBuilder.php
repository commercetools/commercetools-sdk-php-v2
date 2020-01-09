<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingInfoBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderShippingInfoSetMessagePayload>
 */
final class OrderShippingInfoSetMessagePayloadBuilder implements Builder
{
    /**
     * @var null|ShippingInfo|ShippingInfoBuilder
     */
    private $shippingInfo;

    /**
     * @var null|ShippingInfo|ShippingInfoBuilder
     */
    private $oldShippingInfo;

    /**
     * @return null|ShippingInfo
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo;
    }

    /**
     * @return null|ShippingInfo
     */
    public function getOldShippingInfo()
    {
        return $this->oldShippingInfo instanceof ShippingInfoBuilder ? $this->oldShippingInfo->build() : $this->oldShippingInfo;
    }

    /**
     * @return $this
     */
    public function withShippingInfo(?ShippingInfo $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldShippingInfo(?ShippingInfo $oldShippingInfo)
    {
        $this->oldShippingInfo = $oldShippingInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingInfoBuilder(?ShippingInfoBuilder $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldShippingInfoBuilder(?ShippingInfoBuilder $oldShippingInfo)
    {
        $this->oldShippingInfo = $oldShippingInfo;

        return $this;
    }

    public function build(): OrderShippingInfoSetMessagePayload
    {
        return new OrderShippingInfoSetMessagePayloadModel(
            $this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo,
            $this->oldShippingInfo instanceof ShippingInfoBuilder ? $this->oldShippingInfo->build() : $this->oldShippingInfo
        );
    }

    public static function of(): OrderShippingInfoSetMessagePayloadBuilder
    {
        return new self();
    }
}
