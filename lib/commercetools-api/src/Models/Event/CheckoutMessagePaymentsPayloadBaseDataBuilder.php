<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceBuilder;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceBuilder;
use Commercetools\Api\Models\Payment\PaymentReference;
use Commercetools\Api\Models\Payment\PaymentReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CheckoutMessagePaymentsPayloadBaseData>
 */
final class CheckoutMessagePaymentsPayloadBaseDataBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $projectKey;

    /**

     * @var null|PaymentReference|PaymentReferenceBuilder
     */
    private $payment;

    /**

     * @var ?string
     */
    private $transactionId;

    /**

     * @var null|CartReference|CartReferenceBuilder
     */
    private $cart;

    /**

     * @var null|OrderReference|OrderReferenceBuilder
     */
    private $order;

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Project">Project</a> where the payment was made.</p>
     *

     * @return null|string
     */
    public function getProjectKey()
    {
        return $this->projectKey;
    }

    /**
     * <p>The <a href="ctp:api:type:Payment">Payment</a> on which the change or action was performed.</p>
     *

     * @return null|PaymentReference
     */
    public function getPayment()
    {
        return $this->payment instanceof PaymentReferenceBuilder ? $this->payment->build() : $this->payment;
    }

    /**
     * <p><code>id</code> of the <a href="/../api/projects/payments#transaction">Transaction</a>.</p>
     *

     * @return null|string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * <p>The <a href="ctp:api:type:Cart">Cart</a> on which the change or action was performed.</p>
     *

     * @return null|CartReference
     */
    public function getCart()
    {
        return $this->cart instanceof CartReferenceBuilder ? $this->cart->build() : $this->cart;
    }

    /**
     * <p>The <a href="ctp:api:type:Order">Order</a> on which the change or action was performed.</p>
     *

     * @return null|OrderReference
     */
    public function getOrder()
    {
        return $this->order instanceof OrderReferenceBuilder ? $this->order->build() : $this->order;
    }

    /**
     * @param ?string $projectKey
     * @return $this
     */
    public function withProjectKey(?string $projectKey)
    {
        $this->projectKey = $projectKey;

        return $this;
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
     * @param ?string $transactionId
     * @return $this
     */
    public function withTransactionId(?string $transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * @param ?CartReference $cart
     * @return $this
     */
    public function withCart(?CartReference $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @param ?OrderReference $order
     * @return $this
     */
    public function withOrder(?OrderReference $order)
    {
        $this->order = $order;

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

    /**
     * @deprecated use withCart() instead
     * @return $this
     */
    public function withCartBuilder(?CartReferenceBuilder $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @deprecated use withOrder() instead
     * @return $this
     */
    public function withOrderBuilder(?OrderReferenceBuilder $order)
    {
        $this->order = $order;

        return $this;
    }

    public function build(): CheckoutMessagePaymentsPayloadBaseData
    {
        return new CheckoutMessagePaymentsPayloadBaseDataModel(
            $this->projectKey,
            $this->payment instanceof PaymentReferenceBuilder ? $this->payment->build() : $this->payment,
            $this->transactionId,
            $this->cart instanceof CartReferenceBuilder ? $this->cart->build() : $this->cart,
            $this->order instanceof OrderReferenceBuilder ? $this->order->build() : $this->order
        );
    }

    public static function of(): CheckoutMessagePaymentsPayloadBaseDataBuilder
    {
        return new self();
    }
}
