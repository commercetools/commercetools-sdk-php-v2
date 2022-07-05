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
use stdClass;

/**
 * @implements Builder<OrderTransitionStateAction>
 */
final class OrderTransitionStateActionBuilder implements Builder
{
    /**

     * @var null|StateResourceIdentifier|StateResourceIdentifierBuilder
     */
    private $state;

    /**

     * @var ?bool
     */
    private $force;

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        return $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state;
    }

    /**

     * @return null|bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @param ?StateResourceIdentifier $state
     * @return $this
     */
    public function withState(?StateResourceIdentifier $state)
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
    public function withStateBuilder(?StateResourceIdentifierBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    public function build(): OrderTransitionStateAction
    {
        return new OrderTransitionStateActionModel(
            $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state,
            $this->force
        );
    }

    public static function of(): OrderTransitionStateActionBuilder
    {
        return new self();
    }
}
