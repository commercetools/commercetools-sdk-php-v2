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

/**
 * @implements Builder<ProductStateTransitionMessagePayload>
 */
final class ProductStateTransitionMessagePayloadBuilder implements Builder
{
    /**
     * @var null|StateReference|StateReferenceBuilder
     */
    private $state;

    /**
     * @var ?bool
     */
    private $force;

    /**
     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * @return null|bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withForce(?bool $force)
    {
        $this->force = $force;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    public function build(): ProductStateTransitionMessagePayload
    {
        return new ProductStateTransitionMessagePayloadModel(
            $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state,
            $this->force
        );
    }

    public static function of(): ProductStateTransitionMessagePayloadBuilder
    {
        return new self();
    }
}
