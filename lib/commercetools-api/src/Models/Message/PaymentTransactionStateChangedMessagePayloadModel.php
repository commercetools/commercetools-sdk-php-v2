<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObjectModel;

final class PaymentTransactionStateChangedMessagePayloadModel extends JsonObjectModel implements PaymentTransactionStateChangedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'PaymentTransactionStateChanged';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $state;

    /**
     * @var ?string
     */
    protected $transactionId;

    public function __construct(
        string $state = null,
        string $transactionId = null
    ) {
        $this->state = $state;
        $this->transactionId = $transactionId;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentTransactionStateChangedMessagePayload::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * @return null|string
     */
    public function getTransactionId()
    {
        if (is_null($this->transactionId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentTransactionStateChangedMessagePayload::FIELD_TRANSACTION_ID);
            if (is_null($data)) {
                return null;
            }
            $this->transactionId = (string) $data;
        }

        return $this->transactionId;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }
}
