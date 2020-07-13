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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentCreatedMessagePayload>
 */
final class PaymentCreatedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|Payment|PaymentBuilder
     */
    private $payment;

    /**
     * @return null|Payment
     */
    public function getPayment()
    {
        return $this->payment instanceof PaymentBuilder ? $this->payment->build() : $this->payment;
    }

    /**
     * @param ?Payment $payment
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
            $this->payment instanceof PaymentBuilder ? $this->payment->build() : $this->payment
        );
    }

    public static function of(): PaymentCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
