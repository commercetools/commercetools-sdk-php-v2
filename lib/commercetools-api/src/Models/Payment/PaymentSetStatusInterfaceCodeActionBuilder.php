<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentSetStatusInterfaceCodeAction>
 */
final class PaymentSetStatusInterfaceCodeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

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
    public function getAction()
    {
        return $this->action;
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
    public function withAction(?string $action)
    {
        $this->action = $action;

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

    public function build(): PaymentSetStatusInterfaceCodeAction
    {
        return new PaymentSetStatusInterfaceCodeActionModel(
            $this->action,
            $this->interfaceCode
        );
    }

    public static function of(): PaymentSetStatusInterfaceCodeActionBuilder
    {
        return new self();
    }
}
