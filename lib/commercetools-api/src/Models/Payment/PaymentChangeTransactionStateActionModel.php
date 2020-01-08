<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObjectModel;

final class PaymentChangeTransactionStateActionModel extends JsonObjectModel implements PaymentChangeTransactionStateAction
{
    const DISCRIMINATOR_VALUE = 'changeTransactionState';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $transactionId;

    /**
     * @var ?string
     */
    protected $state;

    public function __construct(
        string $transactionId = null,
        string $state = null
    ) {
        $this->transactionId = $transactionId;
        $this->state = $state;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getTransactionId()
    {
        if (is_null($this->transactionId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentChangeTransactionStateAction::FIELD_TRANSACTION_ID);
            if (is_null($data)) {
                return null;
            }
            $this->transactionId = (string) $data;
        }

        return $this->transactionId;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentChangeTransactionStateAction::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }
}
