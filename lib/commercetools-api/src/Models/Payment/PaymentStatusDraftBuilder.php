<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;

/**
 * @implements Builder<PaymentStatusDraft>
 */
final class PaymentStatusDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $interfaceCode;

    /**
     * @var ?string
     */
    private $interfaceText;

    /**
     * @var null|StateResourceIdentifier|StateResourceIdentifierBuilder
     */
    private $state;

    /**
     * @return null|string
     */
    public function getInterfaceCode()
    {
        return $this->interfaceCode;
    }

    /**
     * @return null|string
     */
    public function getInterfaceText()
    {
        return $this->interfaceText;
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
    public function withInterfaceCode(?string $interfaceCode)
    {
        $this->interfaceCode = $interfaceCode;

        return $this;
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

    public function build(): PaymentStatusDraft
    {
        return new PaymentStatusDraftModel(
            $this->interfaceCode,
            $this->interfaceText,
            $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state
        );
    }

    public static function of(): PaymentStatusDraftBuilder
    {
        return new self();
    }
}
