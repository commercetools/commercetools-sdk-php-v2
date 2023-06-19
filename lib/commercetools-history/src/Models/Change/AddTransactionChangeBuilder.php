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
use Commercetools\History\Models\Common\Transaction;
use Commercetools\History\Models\Common\TransactionBuilder;

/**
 * @implements Builder<AddTransactionChange>
 */
final class AddTransactionChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Transaction|TransactionBuilder
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
     * <p>Value after the change.</p>
     *

     * @return null|Transaction
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof TransactionBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?Transaction $nextValue
     * @return $this
     */
    public function withNextValue(?Transaction $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?TransactionBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddTransactionChange
    {
        return new AddTransactionChangeModel(
            $this->change,
            $this->nextValue instanceof TransactionBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddTransactionChangeBuilder
    {
        return new self();
    }
}
