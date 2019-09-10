<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentStatus>
 */
final class PaymentStatusBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $interfaceText;

    /**
     * @var StateReference|?StateReferenceBuilder
     */
    private $state;

    /**
     * @var ?string
     */
    private $interfaceCode;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getInterfaceText()
    {
        return $this->interfaceText;
    }

    /**
     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * @return null|string
     */
    public function getInterfaceCode()
    {
        return $this->interfaceCode;
    }

    /**
     * @return $this
     */
    public function withInterfaceText(?string $interfaceText)
    {
        $this->interfaceText = $interfaceText;

        return $this;
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
    public function withInterfaceCode(?string $interfaceCode)
    {
        $this->interfaceCode = $interfaceCode;

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

    public function build(): PaymentStatus
    {
        return new PaymentStatusModel(
            $this->interfaceText,
            ($this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state),
            $this->interfaceCode
        );
    }

    public static function of(): PaymentStatusBuilder
    {
        return new self();
    }
}
