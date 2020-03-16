<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Payment\TransactionDraft;
use Commercetools\Api\Models\Payment\TransactionDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyPaymentAddTransactionActionModel extends JsonObjectModel implements MyPaymentAddTransactionAction
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


    public function __construct(
        TransactionDraft $transaction = null
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
            $data = $this->raw(MyPaymentUpdateAction::FIELD_ACTION);
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
            $data = $this->raw(MyPaymentAddTransactionAction::FIELD_TRANSACTION);
            if (is_null($data)) {
                return null;
            }

            $this->transaction = TransactionDraftModel::of($data);
        }

        return $this->transaction;
    }

    public function setTransaction(?TransactionDraft $transaction): void
    {
        $this->transaction = $transaction;
    }
}
