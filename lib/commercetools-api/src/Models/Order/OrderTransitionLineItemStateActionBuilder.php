<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<OrderTransitionLineItemStateAction>
 */
final class OrderTransitionLineItemStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $lineItemId;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var null|StateResourceIdentifier|StateResourceIdentifierBuilder
     */
    private $fromState;

    /**
     * @var null|StateResourceIdentifier|StateResourceIdentifierBuilder
     */
    private $toState;

    /**
     * @var ?DateTimeImmutable
     */
    private $actualTransitionDate;

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getFromState()
    {
        return $this->fromState instanceof StateResourceIdentifierBuilder ? $this->fromState->build() : $this->fromState;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getToState()
    {
        return $this->toState instanceof StateResourceIdentifierBuilder ? $this->toState->build() : $this->toState;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getActualTransitionDate()
    {
        return $this->actualTransitionDate;
    }

    /**
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFromState(?StateResourceIdentifier $fromState)
    {
        $this->fromState = $fromState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withToState(?StateResourceIdentifier $toState)
    {
        $this->toState = $toState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withActualTransitionDate(?DateTimeImmutable $actualTransitionDate)
    {
        $this->actualTransitionDate = $actualTransitionDate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFromStateBuilder(?StateResourceIdentifierBuilder $fromState)
    {
        $this->fromState = $fromState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withToStateBuilder(?StateResourceIdentifierBuilder $toState)
    {
        $this->toState = $toState;

        return $this;
    }

    public function build(): OrderTransitionLineItemStateAction
    {
        return new OrderTransitionLineItemStateActionModel(
            $this->lineItemId,
            $this->quantity,
            $this->fromState instanceof StateResourceIdentifierBuilder ? $this->fromState->build() : $this->fromState,
            $this->toState instanceof StateResourceIdentifierBuilder ? $this->toState->build() : $this->toState,
            $this->actualTransitionDate
        );
    }

    public static function of(): OrderTransitionLineItemStateActionBuilder
    {
        return new self();
    }
}
