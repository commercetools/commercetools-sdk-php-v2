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
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<PaymentSetAuthorizationAction>
 */
final class PaymentSetAuthorizationActionBuilder implements Builder
{
    /**
     * @var null|Money|MoneyBuilder
     */
    private $amount;

    /**
     * @var ?DateTimeImmutable
     */
    private $until;

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *
     * @return null|Money
     */
    public function getAmount()
    {
        return $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getUntil()
    {
        return $this->until;
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
     * @param ?DateTimeImmutable $until
     * @return $this
     */
    public function withUntil(?DateTimeImmutable $until)
    {
        $this->until = $until;

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

    public function build(): PaymentSetAuthorizationAction
    {
        return new PaymentSetAuthorizationActionModel(
            $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount,
            $this->until
        );
    }

    public static function of(): PaymentSetAuthorizationActionBuilder
    {
        return new self();
    }
}
