<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentMethodInfo>
 */
final class PaymentMethodInfoBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $paymentInterface;

    /**
     * @var ?string
     */
    private $method;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $name;

    /**
     * <p>The interface that handles the payment (usually a PSP).
     * Cannot be changed once it has been set.
     * The combination of Payment<code>interfaceId</code> and this field must be unique.</p>.
     *
     * @return null|string
     */
    public function getPaymentInterface()
    {
        return $this->paymentInterface;
    }

    /**
     * <p>The payment method that is used, e.g.
     * e.g.
     * a conventional string representing Credit Card, Cash Advance etc.</p>.
     *
     * @return null|string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * <p>A human-readable, localized name for the payment method, e.g.
     * 'Credit Card'.</p>.
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * @return $this
     */
    public function withPaymentInterface(?string $paymentInterface)
    {
        $this->paymentInterface = $paymentInterface;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMethod(?string $method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): PaymentMethodInfo
    {
        return new PaymentMethodInfoModel(
            $this->paymentInterface,
            $this->method,
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name)
        );
    }

    public static function of(): PaymentMethodInfoBuilder
    {
        return new self();
    }
}
