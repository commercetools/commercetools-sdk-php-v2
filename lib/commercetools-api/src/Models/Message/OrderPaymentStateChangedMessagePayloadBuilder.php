<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderPaymentStateChangedMessagePayload>
 */
final class OrderPaymentStateChangedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $paymentState;

    /**
     * @var ?string
     */
    private $oldPaymentState;

    /**
     * @return null|string
     */
    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * @return null|string
     */
    public function getOldPaymentState()
    {
        return $this->oldPaymentState;
    }

    /**
     * @return $this
     */
    public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldPaymentState(?string $oldPaymentState)
    {
        $this->oldPaymentState = $oldPaymentState;

        return $this;
    }

    public function build(): OrderPaymentStateChangedMessagePayload
    {
        return new OrderPaymentStateChangedMessagePayloadModel(
            $this->paymentState,
            $this->oldPaymentState
        );
    }

    public static function of(): OrderPaymentStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
