<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Payment\Payment;
use Commercetools\Api\Models\Payment\PaymentBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentCreatedMessagePayload>
 */
final class PaymentCreatedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var Payment|?PaymentBuilder
     */
    private $payment;

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
     * @return null|Payment
     */
    public function getPayment()
    {
        return $this->payment instanceof PaymentBuilder ? $this->payment->build() : $this->payment;
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
    public function withPayment(?Payment $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPaymentBuilder(?PaymentBuilder $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    public function build(): PaymentCreatedMessagePayload
    {
        return new PaymentCreatedMessagePayloadModel(
            $this->type,
            ($this->payment instanceof PaymentBuilder ? $this->payment->build() : $this->payment)
        );
    }

    public static function of(): PaymentCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
