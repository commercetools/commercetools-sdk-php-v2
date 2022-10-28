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
     * <p><a href="ctp:api:type:PaymentState">PaymentState</a> after the <a href="ctp:api:type:OrderChangePaymentStateAction">Change Payment State</a> update action.</p>
     *

     * @return null|string
     */
    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * <p><a href="ctp:api:type:PaymentState">PaymentState</a> before the <a href="ctp:api:type:OrderChangePaymentStateAction">Change Payment State</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldPaymentState()
    {
        return $this->oldPaymentState;
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

    /**
     * @param ?string $oldPaymentState
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
