<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxPortionDraft>
 */
final class TaxPortionDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?int
     */
    private $rate;

    /**
     * @var Money|?MoneyBuilder
     */
    private $amount;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|int
     */
    public function getRate()
    {
        return $this->rate;
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
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRate(?int $rate)
    {
        $this->rate = $rate;

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

    public function build(): TaxPortionDraft
    {
        return new TaxPortionDraftModel(
            $this->name,
            $this->rate,
            ($this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount)
        );
    }

    public static function of(): TaxPortionDraftBuilder
    {
        return new self();
    }
}
