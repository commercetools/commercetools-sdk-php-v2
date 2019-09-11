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
     * @var ?string
     */
    private $interactionId;

    /**
     * @var Money|?MoneyBuilder
     */
    private $amount;

    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?DateTimeImmutable
     */
    private $timestamp;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getInteractionId()
    {
        return $this->interactionId;
    }

    /**
     * @return null|Money
     */
    public function getAmount()
    {
        return $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount;
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
    public function withAmount(?Money $amount)
    {
        $this->amount = $amount;

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
    public function withAmountBuilder(?MoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): MyTransactionDraft
    {
        return new MyTransactionDraftModel(
            $this->interactionId,
            ($this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount),
            $this->type,
            $this->timestamp
        );
    }

    public static function of(): MyTransactionDraftBuilder
    {
        return new self();
    }
}
