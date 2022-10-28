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
use stdClass;

/**
 * @implements Builder<QuoteStateTransitionMessagePayload>
 */
final class QuoteStateTransitionMessagePayloadBuilder implements Builder
{
    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $state;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $oldState;

    /**

     * @var ?bool
     */
    private $force;

    /**
     * <p><a href="ctp:api:type:State">State</a> of the <a href="ctp:api:type:Quote">Quote</a> after the <a href="ctp:api:type:QuoteTransitionStateAction">Transition State</a> update action.</p>
     *

     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the <a href="ctp:api:type:Quote">Quote</a> before the <a href="ctp:api:type:QuoteTransitionStateAction">Transition State</a> update action.</p>
     *

     * @return null|StateReference
     */
    public function getOldState()
    {
        return $this->oldState instanceof StateReferenceBuilder ? $this->oldState->build() : $this->oldState;
    }

    /**
     * <p>Whether <a href="ctp:api:type:State">State</a> transition validations were turned off during the <a href="ctp:api:type:QuoteTransitionStateAction">Transition State</a> update action.</p>
     *

     * @return null|bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @param ?StateReference $state
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?StateReference $oldState
     * @return $this
     */
    public function withOldState(?StateReference $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }

    /**
     * @param ?bool $force
     * @return $this
     */
    public function withForce(?bool $force)
    {
        $this->force = $force;

        return $this;
    }

    /**
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withOldState() instead
     * @return $this
     */
    public function withOldStateBuilder(?StateReferenceBuilder $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }

    public function build(): QuoteStateTransitionMessagePayload
    {
        return new QuoteStateTransitionMessagePayloadModel(
            $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state,
            $this->oldState instanceof StateReferenceBuilder ? $this->oldState->build() : $this->oldState,
            $this->force
        );
    }

    public static function of(): QuoteStateTransitionMessagePayloadBuilder
    {
        return new self();
    }
}
