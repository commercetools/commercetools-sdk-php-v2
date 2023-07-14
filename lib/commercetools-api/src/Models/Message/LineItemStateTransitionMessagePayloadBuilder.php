<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<LineItemStateTransitionMessagePayload>
 */
final class LineItemStateTransitionMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var ?string
     */
    private $lineItemKey;

    /**

     * @var ?DateTimeImmutable
     */
    private $transitionDate;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $fromState;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $toState;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:LineItem">Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p>User-defined unique identifier of the LineItem.</p>
     *

     * @return null|string
     */
    public function getLineItemKey()
    {
        return $this->lineItemKey;
    }

    /**
     * <p>Date and time (UTC) when the transition of the <a href="ctp:api:type:LineItem">Line Item</a> <a href="ctp:api:type:State">State</a> was performed.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getTransitionDate()
    {
        return $this->transitionDate;
    }

    /**
     * <p>Number of <a href="ctp:api:type:LineItem">Line Items</a> for which the <a href="ctp:api:type:State">State</a> was transitioned.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> the <a href="ctp:api:type:LineItem">Line Item</a> was transitioned from.</p>
     *

     * @return null|StateReference
     */
    public function getFromState()
    {
        return $this->fromState instanceof StateReferenceBuilder ? $this->fromState->build() : $this->fromState;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> the <a href="ctp:api:type:LineItem">Line Item</a> was transitioned to.</p>
     *

     * @return null|StateReference
     */
    public function getToState()
    {
        return $this->toState instanceof StateReferenceBuilder ? $this->toState->build() : $this->toState;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?string $lineItemKey
     * @return $this
     */
    public function withLineItemKey(?string $lineItemKey)
    {
        $this->lineItemKey = $lineItemKey;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $transitionDate
     * @return $this
     */
    public function withTransitionDate(?DateTimeImmutable $transitionDate)
    {
        $this->transitionDate = $transitionDate;

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
     * @param ?StateReference $fromState
     * @return $this
     */
    public function withFromState(?StateReference $fromState)
    {
        $this->fromState = $fromState;

        return $this;
    }

    /**
     * @param ?StateReference $toState
     * @return $this
     */
    public function withToState(?StateReference $toState)
    {
        $this->toState = $toState;

        return $this;
    }

    /**
     * @deprecated use withFromState() instead
     * @return $this
     */
    public function withFromStateBuilder(?StateReferenceBuilder $fromState)
    {
        $this->fromState = $fromState;

        return $this;
    }

    /**
     * @deprecated use withToState() instead
     * @return $this
     */
    public function withToStateBuilder(?StateReferenceBuilder $toState)
    {
        $this->toState = $toState;

        return $this;
    }

    public function build(): LineItemStateTransitionMessagePayload
    {
        return new LineItemStateTransitionMessagePayloadModel(
            $this->lineItemId,
            $this->lineItemKey,
            $this->transitionDate,
            $this->quantity,
            $this->fromState instanceof StateReferenceBuilder ? $this->fromState->build() : $this->fromState,
            $this->toState instanceof StateReferenceBuilder ? $this->toState->build() : $this->toState
        );
    }

    public static function of(): LineItemStateTransitionMessagePayloadBuilder
    {
        return new self();
    }
}
