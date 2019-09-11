<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Payment\TransactionDraft;
use Commercetools\Api\Models\Payment\TransactionDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<MyPaymentAddTransactionAction>
 */
final class MyPaymentAddTransactionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var TransactionDraft|?TransactionDraftBuilder
     */
    private $transaction;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|TransactionDraft
     */
    public function getTransaction()
    {
        return $this->transaction instanceof TransactionDraftBuilder ? $this->transaction->build() : $this->transaction;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTransaction(?TransactionDraft $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTransactionBuilder(?TransactionDraftBuilder $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    public function build(): MyPaymentAddTransactionAction
    {
        return new MyPaymentAddTransactionActionModel(
            $this->action,
            ($this->transaction instanceof TransactionDraftBuilder ? $this->transaction->build() : $this->transaction)
        );
    }

    public static function of(): MyPaymentAddTransactionActionBuilder
    {
        return new self();
    }
}
