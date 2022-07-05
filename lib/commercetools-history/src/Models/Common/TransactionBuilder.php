<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Transaction>
 */
final class TransactionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
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

     * @var ?string
     */
    private $state;

    /**
     * <p>The unique ID of this object.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The time at which the transaction took place.</p>
     *

     * @return null|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**

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
     * <p>The identifier that is used by the interface that managed the transaction (usually the PSP). If a matching interaction was logged in the <code>interfaceInteractions</code> array, the corresponding interaction should be findable with this ID.</p>
     *

     * @return null|string
     */
    public function getInteractionId()
    {
        return $this->interactionId;
    }

    /**

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $timestamp
     * @return $this
     */
    public function withTimestamp(?string $timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?Money $amount
     * @return $this
     */
    public function withAmount(?Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @param ?string $interactionId
     * @return $this
     */
    public function withInteractionId(?string $interactionId)
    {
        $this->interactionId = $interactionId;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withAmount() instead
     * @return $this
     */
    public function withAmountBuilder(?MoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): Transaction
    {
        return new TransactionModel(
            $this->id,
            $this->timestamp,
            $this->type,
            $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount,
            $this->interactionId,
            $this->state
        );
    }

    public static function of(): TransactionBuilder
    {
        return new self();
    }
}
