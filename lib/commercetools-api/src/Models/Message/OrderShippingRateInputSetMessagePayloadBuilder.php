<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\ShippingRateInputBuilder;

/**
 * @implements Builder<OrderShippingRateInputSetMessagePayload>
 */
final class OrderShippingRateInputSetMessagePayloadBuilder implements Builder
{
    /**
     * @var null|ShippingRateInput|ShippingRateInputBuilder
     */
    private $shippingRateInput;

    /**
     * @var null|ShippingRateInput|ShippingRateInputBuilder
     */
    private $oldShippingRateInput;

    /**
     * @return null|ShippingRateInput
     */
    public function getShippingRateInput()
    {
        return $this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput;
    }

    /**
     * @return null|ShippingRateInput
     */
    public function getOldShippingRateInput()
    {
        return $this->oldShippingRateInput instanceof ShippingRateInputBuilder ? $this->oldShippingRateInput->build() : $this->oldShippingRateInput;
    }

    /**
     * @return $this
     */
    public function withShippingRateInput(?ShippingRateInput $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldShippingRateInput(?ShippingRateInput $oldShippingRateInput)
    {
        $this->oldShippingRateInput = $oldShippingRateInput;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateInputBuilder(?ShippingRateInputBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldShippingRateInputBuilder(?ShippingRateInputBuilder $oldShippingRateInput)
    {
        $this->oldShippingRateInput = $oldShippingRateInput;

        return $this;
    }

    public function build(): OrderShippingRateInputSetMessagePayload
    {
        return new OrderShippingRateInputSetMessagePayloadModel(
            $this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput,
            $this->oldShippingRateInput instanceof ShippingRateInputBuilder ? $this->oldShippingRateInput->build() : $this->oldShippingRateInput
        );
    }

    public static function of(): OrderShippingRateInputSetMessagePayloadBuilder
    {
        return new self();
    }
}
