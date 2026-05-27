<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\ChangeValue\TransactionChangeValue;
use Commercetools\History\Models\ChangeValue\TransactionChangeValueBuilder;

/**
 * @implements Builder<SetTransactionInterfaceIdChange>
 */
final class SetTransactionInterfaceIdChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|TransactionChangeValue|TransactionChangeValueBuilder
     */
    private $transaction;

    /**

     * @var ?string
     */
    private $previousValue;

    /**

     * @var ?string
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Holds information about the updated Transaction.</p>
     *

     * @return null|TransactionChangeValue
     */
    public function getTransaction()
    {
        return $this->transaction instanceof TransactionChangeValueBuilder ? $this->transaction->build() : $this->transaction;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|string
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|string
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?TransactionChangeValue $transaction
     * @return $this
     */
    public function withTransaction(?TransactionChangeValue $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @param ?string $previousValue
     * @return $this
     */
    public function withPreviousValue(?string $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?string $nextValue
     * @return $this
     */
    public function withNextValue(?string $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withTransaction() instead
     * @return $this
     */
    public function withTransactionBuilder(?TransactionChangeValueBuilder $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    public function build(): SetTransactionInterfaceIdChange
    {
        return new SetTransactionInterfaceIdChangeModel(
            $this->change,
            $this->transaction instanceof TransactionChangeValueBuilder ? $this->transaction->build() : $this->transaction,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetTransactionInterfaceIdChangeBuilder
    {
        return new self();
    }
}
