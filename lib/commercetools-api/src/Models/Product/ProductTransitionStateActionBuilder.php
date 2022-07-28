<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTransitionStateAction>
 */
final class ProductTransitionStateActionBuilder implements Builder
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
     * <p>The State to transition to. If there is no existing State, this must be an initial State.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        return $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>If <code>true</code>, validations are disabled.</p>
     *

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

    public function build(): ProductTransitionStateAction
    {
        return new ProductTransitionStateActionModel(
            $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state,
            $this->force
        );
    }

    public static function of(): ProductTransitionStateActionBuilder
    {
        return new self();
    }
}
