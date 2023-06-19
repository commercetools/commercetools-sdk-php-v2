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
 * @implements Builder<ChangeTransactionInteractionIdChange>
 */
final class ChangeTransactionInteractionIdChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?string
     */
    private $previousValue;

    /**

     * @var ?string
     */
    private $nextValue;

    /**

     * @var null|TransactionChangeValue|TransactionChangeValueBuilder
     */
    private $transaction;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|string
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|string
     */
    public function getNextValue()
    {
        return $this->nextValue;
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
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

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
     * @param ?TransactionChangeValue $transaction
     * @return $this
     */
    public function withTransaction(?TransactionChangeValue $transaction)
    {
        $this->transaction = $transaction;

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

    public function build(): ChangeTransactionInteractionIdChange
    {
        return new ChangeTransactionInteractionIdChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->transaction instanceof TransactionChangeValueBuilder ? $this->transaction->build() : $this->transaction
        );
    }

    public static function of(): ChangeTransactionInteractionIdChangeBuilder
    {
        return new self();
    }
}
