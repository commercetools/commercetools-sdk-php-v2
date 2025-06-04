<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Payment\PaymentReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CheckoutMessagePaymentsPayloadBaseData extends JsonObject
{
    public const FIELD_PROJECT_KEY = 'projectKey';
    public const FIELD_PAYMENT = 'payment';
    public const FIELD_TRANSACTION_ID = 'transactionId';
    public const FIELD_CART = 'cart';
    public const FIELD_ORDER = 'order';

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Project">Project</a> where the payment was made.</p>
     *

     * @return null|string
     */
    public function getProjectKey();

    /**
     * <p>The <a href="ctp:api:type:Payment">Payment</a> on which the change or action was performed.</p>
     *

     * @return null|PaymentReference
     */
    public function getPayment();

    /**
     * <p><code>id</code> of the <a href="/../api/projects/payments#transaction">Transaction</a>.</p>
     *

     * @return null|string
     */
    public function getTransactionId();

    /**
     * <p>The <a href="ctp:api:type:Cart">Cart</a> on which the change or action was performed.</p>
     *

     * @return null|CartReference
     */
    public function getCart();

    /**
     * <p>The <a href="ctp:api:type:Order">Order</a> on which the change or action was performed.</p>
     *

     * @return null|OrderReference
     */
    public function getOrder();

    /**
     * @param ?string $projectKey
     */
    public function setProjectKey(?string $projectKey): void;

    /**
     * @param ?PaymentReference $payment
     */
    public function setPayment(?PaymentReference $payment): void;

    /**
     * @param ?string $transactionId
     */
    public function setTransactionId(?string $transactionId): void;

    /**
     * @param ?CartReference $cart
     */
    public function setCart(?CartReference $cart): void;

    /**
     * @param ?OrderReference $order
     */
    public function setOrder(?OrderReference $order): void;
}
