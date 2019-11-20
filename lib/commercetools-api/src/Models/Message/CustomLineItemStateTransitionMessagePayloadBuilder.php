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
use DateTimeImmutable;

/**
 * @implements Builder<CustomLineItemStateTransitionMessagePayload>
 */
final class CustomLineItemStateTransitionMessagePayloadBuilder implements Builder
{
    /**
     * @var StateReference|?StateReferenceBuilder
     */
    private $toState;

    /**
     * @var StateReference|?StateReferenceBuilder
     */
    private $fromState;

    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var ?DateTimeImmutable
     */
    private $transitionDate;

    /**
     * @return null|StateReference
     */
    public function getToState()
    {
        return $this->toState instanceof StateReferenceBuilder ? $this->toState->build() : $this->toState;
    }

    /**
     * @return null|StateReference
     */
    public function getFromState()
    {
        return $this->fromState instanceof StateReferenceBuilder ? $this->fromState->build() : $this->fromState;
    }

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getTransitionDate()
    {
        return $this->transitionDate;
    }

    /**
     * @return $this
     */
    public function withToState(?StateReference $toState)
    {
        $this->toState = $toState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFromState(?StateReference $fromState)
    {
        $this->fromState = $fromState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

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
    public function withTransitionDate(?DateTimeImmutable $transitionDate)
    {
        $this->transitionDate = $transitionDate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withToStateBuilder(?StateReferenceBuilder $toState)
    {
        $this->toState = $toState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFromStateBuilder(?StateReferenceBuilder $fromState)
    {
        $this->fromState = $fromState;

        return $this;
    }

    public function build(): CustomLineItemStateTransitionMessagePayload
    {
        return new CustomLineItemStateTransitionMessagePayloadModel(
            ($this->toState instanceof StateReferenceBuilder ? $this->toState->build() : $this->toState),
            ($this->fromState instanceof StateReferenceBuilder ? $this->fromState->build() : $this->fromState),
            $this->customLineItemId,
            $this->quantity,
            $this->transitionDate
        );
    }

    public static function of(): CustomLineItemStateTransitionMessagePayloadBuilder
    {
        return new self();
    }
}
