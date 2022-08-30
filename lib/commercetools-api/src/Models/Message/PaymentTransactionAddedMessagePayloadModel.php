<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Payment\Transaction;
use Commercetools\Api\Models\Payment\TransactionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentTransactionAddedMessagePayloadModel extends JsonObjectModel implements PaymentTransactionAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentTransactionAdded';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?Transaction
     */
    protected $transaction;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Transaction $transaction = null,
        ?string $type = null
    ) {
        $this->transaction = $transaction;
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
     * <p><a href="ctp:api:type:Transaction">Transaction</a> that was added to the <a href="ctp:api:type:Payment">Payment</a>.</p>
     *
     *
     * @return null|Transaction
     */
    public function getTransaction()
    {
        if (is_null($this->transaction)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TRANSACTION);
            if (is_null($data)) {
                return null;
            }

            $this->transaction = TransactionModel::of($data);
        }

        return $this->transaction;
    }


    /**
     * @param ?Transaction $transaction
     */
    public function setTransaction(?Transaction $transaction): void
    {
        $this->transaction = $transaction;
    }
}
