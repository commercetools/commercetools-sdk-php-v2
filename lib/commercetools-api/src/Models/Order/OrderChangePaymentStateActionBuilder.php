<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>New payment status of the Order.</p>
     *

     * @return null|string
     */
    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * @param ?string $paymentState
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
