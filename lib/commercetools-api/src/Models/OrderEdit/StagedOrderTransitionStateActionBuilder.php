<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;

/**
 * @implements Builder<StagedOrderTransitionStateAction>
 */
final class StagedOrderTransitionStateActionBuilder implements Builder
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
     * @return $this
     */
    public function withState(?StateResourceIdentifier $state)
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
    public function withStateBuilder(?StateResourceIdentifierBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    public function build(): StagedOrderTransitionStateAction
    {
        return new StagedOrderTransitionStateActionModel(
            $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state,
            $this->force
        );
    }

    public static function of(): StagedOrderTransitionStateActionBuilder
    {
        return new self();
    }
}
