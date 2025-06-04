<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceModel;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceModel;
use Commercetools\Api\Models\Payment\PaymentReference;
use Commercetools\Api\Models\Payment\PaymentReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CheckoutMessagePaymentsPayloadBaseDataModel extends JsonObjectModel implements CheckoutMessagePaymentsPayloadBaseData
{
    /**
     *
     * @var ?string
     */
    protected $projectKey;

    /**
     *
     * @var ?PaymentReference
     */
    protected $payment;

    /**
     *
     * @var ?string
     */
    protected $transactionId;

    /**
     *
     * @var ?CartReference
     */
    protected $cart;

    /**
     *
     * @var ?OrderReference
     */
    protected $order;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $projectKey = null,
        ?PaymentReference $payment = null,
        ?string $transactionId = null,
        ?CartReference $cart = null,
        ?OrderReference $order = null
    ) {
        $this->projectKey = $projectKey;
        $this->payment = $payment;
        $this->transactionId = $transactionId;
        $this->cart = $cart;
        $this->order = $order;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Project">Project</a> where the payment was made.</p>
     *
     *
     * @return null|string
     */
    public function getProjectKey()
    {
        if (is_null($this->projectKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PROJECT_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->projectKey = (string) $data;
        }

        return $this->projectKey;
    }

    /**
     * <p>The <a href="ctp:api:type:Payment">Payment</a> on which the change or action was performed.</p>
     *
     *
     * @return null|PaymentReference
     */
    public function getPayment()
    {
        if (is_null($this->payment)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYMENT);
            if (is_null($data)) {
                return null;
            }

            $this->payment = PaymentReferenceModel::of($data);
        }

        return $this->payment;
    }

    /**
     * <p><code>id</code> of the <a href="/../api/projects/payments#transaction">Transaction</a>.</p>
     *
     *
     * @return null|string
     */
    public function getTransactionId()
    {
        if (is_null($this->transactionId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TRANSACTION_ID);
            if (is_null($data)) {
                return null;
            }
            $this->transactionId = (string) $data;
        }

        return $this->transactionId;
    }

    /**
     * <p>The <a href="ctp:api:type:Cart">Cart</a> on which the change or action was performed.</p>
     *
     *
     * @return null|CartReference
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CART);
            if (is_null($data)) {
                return null;
            }

            $this->cart = CartReferenceModel::of($data);
        }

        return $this->cart;
    }

    /**
     * <p>The <a href="ctp:api:type:Order">Order</a> on which the change or action was performed.</p>
     *
     *
     * @return null|OrderReference
     */
    public function getOrder()
    {
        if (is_null($this->order)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ORDER);
            if (is_null($data)) {
                return null;
            }

            $this->order = OrderReferenceModel::of($data);
        }

        return $this->order;
    }


    /**
     * @param ?string $projectKey
     */
    public function setProjectKey(?string $projectKey): void
    {
        $this->projectKey = $projectKey;
    }

    /**
     * @param ?PaymentReference $payment
     */
    public function setPayment(?PaymentReference $payment): void
    {
        $this->payment = $payment;
    }

    /**
     * @param ?string $transactionId
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @param ?CartReference $cart
     */
    public function setCart(?CartReference $cart): void
    {
        $this->cart = $cart;
    }

    /**
     * @param ?OrderReference $order
     */
    public function setOrder(?OrderReference $order): void
    {
        $this->order = $order;
    }
}
