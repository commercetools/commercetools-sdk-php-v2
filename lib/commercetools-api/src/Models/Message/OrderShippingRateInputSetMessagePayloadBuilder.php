<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\ShippingRateInputBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p><a href="ctp:api:type:ShippingRateInput">ShippingRateInput</a> after the <a href="ctp:api:type:StagedOrderSetShippingRateInputAction">Set ShippingRateInput</a> update action.</p>
     *

     * @return null|ShippingRateInput
     */
    public function getShippingRateInput()
    {
        return $this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput;
    }

    /**
     * <p><a href="ctp:api:type:ShippingRateInput">ShippingRateInput</a> before the <a href="ctp:api:type:StagedOrderSetShippingRateInputAction">Set ShippingRateInput</a> update action.</p>
     *

     * @return null|ShippingRateInput
     */
    public function getOldShippingRateInput()
    {
        return $this->oldShippingRateInput instanceof ShippingRateInputBuilder ? $this->oldShippingRateInput->build() : $this->oldShippingRateInput;
    }

    /**
     * @param ?ShippingRateInput $shippingRateInput
     * @return $this
     */
    public function withShippingRateInput(?ShippingRateInput $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @param ?ShippingRateInput $oldShippingRateInput
     * @return $this
     */
    public function withOldShippingRateInput(?ShippingRateInput $oldShippingRateInput)
    {
        $this->oldShippingRateInput = $oldShippingRateInput;

        return $this;
    }

    /**
     * @deprecated use withShippingRateInput() instead
     * @return $this
     */
    public function withShippingRateInputBuilder(?ShippingRateInputBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @deprecated use withOldShippingRateInput() instead
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
