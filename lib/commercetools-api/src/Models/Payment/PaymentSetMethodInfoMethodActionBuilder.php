<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentSetMethodInfoMethodAction>
 */
final class PaymentSetMethodInfoMethodActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $method;

    /**
     * <p>If not provided, the method is unset.</p>.
     *
     * @return null|string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return $this
     */
    public function withMethod(?string $method)
    {
        $this->method = $method;

        return $this;
    }

    public function build(): PaymentSetMethodInfoMethodAction
    {
        return new PaymentSetMethodInfoMethodActionModel(
            $this->method
        );
    }

    public static function of(): PaymentSetMethodInfoMethodActionBuilder
    {
        return new self();
    }
}
