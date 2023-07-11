<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<OrderTransitionCustomLineItemStateAction>
 */
final class OrderTransitionCustomLineItemStateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $customLineItemId;

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
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * <p>Number of Custom Line Items that should transition <a href="ctp:api:type:State">State</a>.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> the Custom Line Item should transition from.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getFromState()
    {
        return $this->fromState instanceof StateResourceIdentifierBuilder ? $this->fromState->build() : $this->fromState;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> the Custom Line Item should transition to.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getToState()
    {
        return $this->toState instanceof StateResourceIdentifierBuilder ? $this->toState->build() : $this->toState;
    }

    /**
     * <p>Date and time (UTC) to perform the <a href="ctp:api:type:State">State</a> transition.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getActualTransitionDate()
    {
        return $this->actualTransitionDate;
    }

    /**
     * @param ?string $customLineItemId
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?StateResourceIdentifier $fromState
     * @return $this
     */
    public function withFromState(?StateResourceIdentifier $fromState)
    {
        $this->fromState = $fromState;

        return $this;
    }

    /**
     * @param ?StateResourceIdentifier $toState
     * @return $this
     */
    public function withToState(?StateResourceIdentifier $toState)
    {
        $this->toState = $toState;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $actualTransitionDate
     * @return $this
     */
    public function withActualTransitionDate(?DateTimeImmutable $actualTransitionDate)
    {
        $this->actualTransitionDate = $actualTransitionDate;

        return $this;
    }

    /**
     * @deprecated use withFromState() instead
     * @return $this
     */
    public function withFromStateBuilder(?StateResourceIdentifierBuilder $fromState)
    {
        $this->fromState = $fromState;

        return $this;
    }

    /**
     * @deprecated use withToState() instead
     * @return $this
     */
    public function withToStateBuilder(?StateResourceIdentifierBuilder $toState)
    {
        $this->toState = $toState;

        return $this;
    }

    public function build(): OrderTransitionCustomLineItemStateAction
    {
        return new OrderTransitionCustomLineItemStateActionModel(
            $this->customLineItemId,
            $this->quantity,
            $this->fromState instanceof StateResourceIdentifierBuilder ? $this->fromState->build() : $this->fromState,
            $this->toState instanceof StateResourceIdentifierBuilder ? $this->toState->build() : $this->toState,
            $this->actualTransitionDate
        );
    }

    public static function of(): OrderTransitionCustomLineItemStateActionBuilder
    {
        return new self();
    }
}
