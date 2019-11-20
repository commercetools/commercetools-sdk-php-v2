<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentTransitionStateAction>
 */
final class PaymentTransitionStateActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $force;

    /**
     * @var StateResourceIdentifier|?StateResourceIdentifierBuilder
     */
    private $state;

    /**
     * @return null|bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        return $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state;
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
    public function withState(?StateResourceIdentifier $state)
    {
        $this->state = $state;

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

    public function build(): PaymentTransitionStateAction
    {
        return new PaymentTransitionStateActionModel(
            $this->force,
            ($this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state)
        );
    }

    public static function of(): PaymentTransitionStateActionBuilder
    {
        return new self();
    }
}
