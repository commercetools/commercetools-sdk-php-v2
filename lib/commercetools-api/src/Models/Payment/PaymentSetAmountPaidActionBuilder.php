<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentSetAmountPaidAction>
 */
final class PaymentSetAmountPaidActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var Money|?MoneyBuilder
     */
    private $amount;

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
     * @return null|Money
     */
    public function getAmount()
    {
        return $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount;
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
    public function withAmount(?Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountBuilder(?MoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): PaymentSetAmountPaidAction
    {
        return new PaymentSetAmountPaidActionModel(
            $this->action,
            ($this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount)
        );
    }

    public static function of(): PaymentSetAmountPaidActionBuilder
    {
        return new self();
    }
}
