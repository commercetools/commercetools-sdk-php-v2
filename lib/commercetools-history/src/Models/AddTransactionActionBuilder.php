<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AddTransactionAction>
 */
final class AddTransactionActionBuilder implements Builder
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
     * <p>Update action for <code>addTransaction</code> on payments</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
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
     * @return $this
     */
    public function withNextValueBuilder(?TransactionBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddTransactionAction
    {
        return new AddTransactionActionModel(
            $this->change,
            $this->nextValue instanceof TransactionBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddTransactionActionBuilder
    {
        return new self();
    }
}
