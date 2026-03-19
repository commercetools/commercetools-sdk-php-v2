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
    private $paymentRef;

    /**
     * <p><a href="ctp:api:type:Payment">Payment</a> that was added to the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|PaymentReference
     */
    public function getPaymentRef()
    {
        return $this->paymentRef instanceof PaymentReferenceBuilder ? $this->paymentRef->build() : $this->paymentRef;
    }

    /**
     * @param ?PaymentReference $paymentRef
     * @return $this
     */
    public function withPaymentRef(?PaymentReference $paymentRef)
    {
        $this->paymentRef = $paymentRef;

        return $this;
    }

    /**
     * @deprecated use withPaymentRef() instead
     * @return $this
     */
    public function withPaymentRefBuilder(?PaymentReferenceBuilder $paymentRef)
    {
        $this->paymentRef = $paymentRef;

        return $this;
    }

    public function build(): OrderPaymentAddedMessagePayload
    {
        return new OrderPaymentAddedMessagePayloadModel(
            $this->paymentRef instanceof PaymentReferenceBuilder ? $this->paymentRef->build() : $this->paymentRef
        );
    }

    public static function of(): OrderPaymentAddedMessagePayloadBuilder
    {
        return new self();
    }
}
