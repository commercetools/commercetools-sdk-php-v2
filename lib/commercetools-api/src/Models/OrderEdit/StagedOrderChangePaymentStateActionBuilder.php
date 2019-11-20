<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderChangePaymentStateAction>
 */
final class StagedOrderChangePaymentStateActionBuilder implements Builder
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

    public function build(): StagedOrderChangePaymentStateAction
    {
        return new StagedOrderChangePaymentStateActionModel(
            $this->paymentState
        );
    }

    public static function of(): StagedOrderChangePaymentStateActionBuilder
    {
        return new self();
    }
}
