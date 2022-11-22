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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentChangeAmountPlannedAction>
 */
final class PaymentChangeAmountPlannedActionBuilder implements Builder
{
    /**

     * @var null|Money|MoneyBuilder
     */
    private $amount;

    /**
     * <p>New value to set.</p>
     *

     * @return null|Money
     */
    public function getAmount()
    {
        return $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount;
    }

    /**
     * @param ?Money $amount
     * @return $this
     */
    public function withAmount(?Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @deprecated use withAmount() instead
     * @return $this
     */
    public function withAmountBuilder(?MoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): PaymentChangeAmountPlannedAction
    {
        return new PaymentChangeAmountPlannedActionModel(
            $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount
        );
    }

    public static function of(): PaymentChangeAmountPlannedActionBuilder
    {
        return new self();
    }
}
