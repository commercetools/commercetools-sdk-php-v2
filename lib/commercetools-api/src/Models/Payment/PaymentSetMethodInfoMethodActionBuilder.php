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
    private $action;

    /**
     * @var ?string
     */
    private $method;

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
     * @return null|string
     */
    public function getMethod()
    {
        return $this->method;
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
    public function withMethod(?string $method)
    {
        $this->method = $method;

        return $this;
    }

    public function build(): PaymentSetMethodInfoMethodAction
    {
        return new PaymentSetMethodInfoMethodActionModel(
            $this->action,
            $this->method
        );
    }

    public static function of(): PaymentSetMethodInfoMethodActionBuilder
    {
        return new self();
    }
}
