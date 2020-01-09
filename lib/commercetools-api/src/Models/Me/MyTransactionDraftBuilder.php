<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<MyTransactionDraft>
 */
final class MyTransactionDraftBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $timestamp;

    /**
     * @var ?string
     */
    private $type;

    /**
     * @var null|Money|MoneyBuilder
     */
    private $amount;

    /**
     * @var ?string
     */
    private $interactionId;

    /**
     * <p>The time at which the transaction took place.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * <p>The type of this transaction.
     * Only the <code>Authorization</code> or <code>Charge</code>
     * TransactionTypes are allowed here.</p>
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|Money
     */
    public function getAmount()
    {
        return $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount;
    }

    /**
     * <p>The identifier that is used by the interface that managed the transaction (usually the PSP).
     * If a matching interaction was logged in the interfaceInteractions array,
     * the corresponding interaction should be findable with this ID.
     * The <code>state</code> is set to the <code>Initial</code> TransactionState.</p>
     *
     * @return null|string
     */
    public function getInteractionId()
    {
        return $this->interactionId;
    }

    /**
     * @return $this
     */
    public function withTimestamp(?DateTimeImmutable $timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmount(?Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInteractionId(?string $interactionId)
    {
        $this->interactionId = $interactionId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountBuilder(?MoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): MyTransactionDraft
    {
        return new MyTransactionDraftModel(
            $this->timestamp,
            $this->type,
            $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount,
            $this->interactionId
        );
    }

    public static function of(): MyTransactionDraftBuilder
    {
        return new self();
    }
}
