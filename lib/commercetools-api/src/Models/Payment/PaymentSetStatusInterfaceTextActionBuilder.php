<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentSetStatusInterfaceTextAction>
 */
final class PaymentSetStatusInterfaceTextActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $interfaceText;

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
    public function getInterfaceText()
    {
        return $this->interfaceText;
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
    public function withInterfaceText(?string $interfaceText)
    {
        $this->interfaceText = $interfaceText;

        return $this;
    }

    public function build(): PaymentSetStatusInterfaceTextAction
    {
        return new PaymentSetStatusInterfaceTextActionModel(
            $this->action,
            $this->interfaceText
        );
    }

    public static function of(): PaymentSetStatusInterfaceTextActionBuilder
    {
        return new self();
    }
}
