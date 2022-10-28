<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentTransactionStateChangedMessagePayloadModel extends JsonObjectModel implements PaymentTransactionStateChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentTransactionStateChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $transactionId;

    /**
     *
     * @var ?string
     */
    protected $state;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $transactionId = null,
        ?string $state = null,
        ?string $type = null
    ) {
        $this->transactionId = $transactionId;
        $this->state = $state;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Unique identifier for the <a href="ctp:api:type:Transaction">Transaction</a> for which the <a href="ctp:api:type:TransactionState">Transaction State</a> changed.</p>
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
     * <p><a href="ctp:api:type:TransactionState">Transaction State</a> after the <a href="ctp:api:type:PaymentChangeTransactionStateAction">Change Transaction State</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }


    /**
     * @param ?string $transactionId
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }
}
