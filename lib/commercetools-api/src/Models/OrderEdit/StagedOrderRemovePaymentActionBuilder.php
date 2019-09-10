<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifierBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderRemovePaymentAction>
 */
final class StagedOrderRemovePaymentActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var PaymentResourceIdentifier|?PaymentResourceIdentifierBuilder
     */
    private $payment;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|PaymentResourceIdentifier
     */
    public function getPayment()
    {
        return $this->payment instanceof PaymentResourceIdentifierBuilder ? $this->payment->build() : $this->payment;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPayment(?PaymentResourceIdentifier $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPaymentBuilder(?PaymentResourceIdentifierBuilder $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    public function build(): StagedOrderRemovePaymentAction
    {
        return new StagedOrderRemovePaymentActionModel(
            $this->action,
            ($this->payment instanceof PaymentResourceIdentifierBuilder ? $this->payment->build() : $this->payment)
        );
    }

    public static function of(): StagedOrderRemovePaymentActionBuilder
    {
        return new self();
    }
}
