<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderSetReturnPaymentStateAction>
 */
final class OrderSetReturnPaymentStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $returnItemId;

    /**
     * @var ?string
     */
    private $paymentState;

    /**
     * @return null|string
     */
    public function getReturnItemId()
    {
        return $this->returnItemId;
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
    public function withReturnItemId(?string $returnItemId)
    {
        $this->returnItemId = $returnItemId;

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

    public function build(): OrderSetReturnPaymentStateAction
    {
        return new OrderSetReturnPaymentStateActionModel(
            $this->returnItemId,
            $this->paymentState
        );
    }

    public static function of(): OrderSetReturnPaymentStateActionBuilder
    {
        return new self();
    }
}
