<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Payment\PaymentReference;
use Commercetools\Api\Models\Payment\PaymentReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderPaymentAddedMessagePayload>
 */
final class OrderPaymentAddedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|PaymentReference|PaymentReferenceBuilder
     */
    private $payment;

    /**
     * @return null|PaymentReference
     */
    public function getPayment()
    {
        return $this->payment instanceof PaymentReferenceBuilder ? $this->payment->build() : $this->payment;
    }

    /**
     * @param ?PaymentReference $payment
     * @return $this
     */
    public function withPayment(?PaymentReference $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @deprecated use withPayment() instead
     * @return $this
     */
    public function withPaymentBuilder(?PaymentReferenceBuilder $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    public function build(): OrderPaymentAddedMessagePayload
    {
        return new OrderPaymentAddedMessagePayloadModel(
            $this->payment instanceof PaymentReferenceBuilder ? $this->payment->build() : $this->payment
        );
    }

    public static function of(): OrderPaymentAddedMessagePayloadBuilder
    {
        return new self();
    }
}
