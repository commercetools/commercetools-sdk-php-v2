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
     * <p>Product <a href="ctp:api:type:State">State</a> after the <a href="ctp:api:type:ProductTransitionStateAction">Transition State</a> update action.</p>
     *

     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>Whether <a href="ctp:api:type:State">State</a> transition validations were turned off during the <a href="ctp:api:type:ProductTransitionStateAction">Transition State</a> update action.</p>
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
