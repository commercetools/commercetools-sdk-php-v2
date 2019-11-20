<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<Transaction>
 */
final class TransactionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $interactionId;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $amount;

    /**
     * @var ?string
     */
    private $state;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?DateTimeImmutable
     */
    private $timestamp;

    /**
     * @return null|string
     */
    public function getInteractionId()
    {
        return $this->interactionId;
    }

    /**
     * @return null|TypedMoney
     */
    public function getAmount()
    {
        return $this->amount instanceof TypedMoneyBuilder ? $this->amount->build() : $this->amount;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getTimestamp()
    {
        return $this->timestamp;
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
    public function withAmount(?TypedMoney $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

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
    public function withTimestamp(?DateTimeImmutable $timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountBuilder(?TypedMoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): Transaction
    {
        return new TransactionModel(
            $this->interactionId,
            ($this->amount instanceof TypedMoneyBuilder ? $this->amount->build() : $this->amount),
            $this->state,
            $this->id,
            $this->type,
            $this->timestamp
        );
    }

    public static function of(): TransactionBuilder
    {
        return new self();
    }
}
