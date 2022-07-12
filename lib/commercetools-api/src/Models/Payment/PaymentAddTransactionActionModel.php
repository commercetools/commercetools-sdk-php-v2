<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentAddTransactionActionModel extends JsonObjectModel implements PaymentAddTransactionAction
{
    public const DISCRIMINATOR_VALUE = 'addTransaction';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?TransactionDraft
     */
    protected $transaction;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TransactionDraft $transaction = null
    ) {
        $this->transaction = $transaction;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**

     * @return null|TransactionDraft
     */
    public function getTransaction()
    {
        if (is_null($this->transaction)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TRANSACTION);
            if (is_null($data)) {
                return null;
            }

            $this->transaction = TransactionDraftModel::of($data);
        }

        return $this->transaction;
    }


    /**
     * @param ?TransactionDraft $transaction
     */
    public function setTransaction(?TransactionDraft $transaction): void
    {
        $this->transaction = $transaction;
    }
}
