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
 * @implements Builder<OrderPaymentRemovedMessagePayload>
 */
final class OrderPaymentRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|PaymentReference|PaymentReferenceBuilder
     */
    private $paymentRef;

    /**

     * @var ?bool
     */
    private $removedPaymentInfo;

    /**
     * <p><a href="ctp:api:type:Payment">Payment</a> that was removed from the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|PaymentReference
     */
    public function getPaymentRef()
    {
        return $this->paymentRef instanceof PaymentReferenceBuilder ? $this->paymentRef->build() : $this->paymentRef;
    }

    /**
     * <p>Indicates whether the removal of the Payment resulted in no Payments remaining on the Order. The value is <code>true</code> if all Payments have been removed (none remain), and <code>false</code> if there are still Payments associated with the Order after the removal.</p>
     *

     * @return null|bool
     */
    public function getRemovedPaymentInfo()
    {
        return $this->removedPaymentInfo;
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
     * @param ?bool $removedPaymentInfo
     * @return $this
     */
    public function withRemovedPaymentInfo(?bool $removedPaymentInfo)
    {
        $this->removedPaymentInfo = $removedPaymentInfo;

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

    public function build(): OrderPaymentRemovedMessagePayload
    {
        return new OrderPaymentRemovedMessagePayloadModel(
            $this->paymentRef instanceof PaymentReferenceBuilder ? $this->paymentRef->build() : $this->paymentRef,
            $this->removedPaymentInfo
        );
    }

    public static function of(): OrderPaymentRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
