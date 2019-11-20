<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderChangePaymentStateAction>
 */
final class OrderChangePaymentStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $paymentState;

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
    public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;

        return $this;
    }

    public function build(): OrderChangePaymentStateAction
    {
        return new OrderChangePaymentStateActionModel(
            $this->paymentState
        );
    }

    public static function of(): OrderChangePaymentStateActionBuilder
    {
        return new self();
    }
}
