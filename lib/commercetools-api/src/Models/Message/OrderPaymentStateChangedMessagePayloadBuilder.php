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
    private $type;

    /**
     * @var ?string
     */
    private $oldPaymentState;

    /**
     * @var ?string
     */
    private $paymentState;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getOldPaymentState()
    {
        return $this->oldPaymentState;
    }

    /**
     * @return null|string
     */
    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

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

    /**
     * @return $this
     */
    public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;

        return $this;
    }

    public function build(): OrderPaymentStateChangedMessagePayload
    {
        return new OrderPaymentStateChangedMessagePayloadModel(
            $this->type,
            $this->oldPaymentState,
            $this->paymentState
        );
    }

    public static function of(): OrderPaymentStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
