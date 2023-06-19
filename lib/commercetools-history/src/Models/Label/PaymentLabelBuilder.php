<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Money;
use Commercetools\History\Models\Common\MoneyBuilder;

/**
 * @implements Builder<PaymentLabel>
 */
final class PaymentLabelBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $amountPlanned;

    /**
     * <p>User-defined unique identifier of the Payment.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Money value the Payment intends to receive from the Customer.</p>
     *

     * @return null|Money
     */
    public function getAmountPlanned()
    {
        return $this->amountPlanned instanceof MoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?Money $amountPlanned
     * @return $this
     */
    public function withAmountPlanned(?Money $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

        return $this;
    }

    /**
     * @deprecated use withAmountPlanned() instead
     * @return $this
     */
    public function withAmountPlannedBuilder(?MoneyBuilder $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

        return $this;
    }

    public function build(): PaymentLabel
    {
        return new PaymentLabelModel(
            $this->key,
            $this->amountPlanned instanceof MoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned
        );
    }

    public static function of(): PaymentLabelBuilder
    {
        return new self();
    }
}
