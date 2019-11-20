<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Api\Models\Common\TypedMoneyDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxPortionDraft>
 */
final class TaxPortionDraftBuilder implements Builder
{
    /**
     * @var TypedMoneyDraft|?TypedMoneyDraftBuilder
     */
    private $amount;

    /**
     * @var ?int
     */
    private $rate;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @return null|TypedMoneyDraft
     */
    public function getAmount()
    {
        return $this->amount instanceof TypedMoneyDraftBuilder ? $this->amount->build() : $this->amount;
    }

    /**
     * @return null|int
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function withAmount(?TypedMoneyDraft $amount)
    {
        $this->amount = $amount;

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
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountBuilder(?TypedMoneyDraftBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): TaxPortionDraft
    {
        return new TaxPortionDraftModel(
            ($this->amount instanceof TypedMoneyDraftBuilder ? $this->amount->build() : $this->amount),
            $this->rate,
            $this->name
        );
    }

    public static function of(): TaxPortionDraftBuilder
    {
        return new self();
    }
}
