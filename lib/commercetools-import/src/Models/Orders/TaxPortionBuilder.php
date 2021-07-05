<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Common\TypedMoneyBuilder;
use stdClass;

/**
 * @implements Builder<TaxPortion>
 */
final class TaxPortionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?float
     */
    private $rate;

    /**
     * @var null|TypedMoney|TypedMoneyBuilder
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
     * @return null|float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * <p>TypedMoney is what is called BaseMoney in the HTTP API.</p>
     *
     * @return null|TypedMoney
     */
    public function getAmount()
    {
        return $this->amount instanceof TypedMoneyBuilder ? $this->amount->build() : $this->amount;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?float $rate
     * @return $this
     */
    public function withRate(?float $rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @param ?TypedMoney $amount
     * @return $this
     */
    public function withAmount(?TypedMoney $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @deprecated use withAmount() instead
     * @return $this
     */
    public function withAmountBuilder(?TypedMoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): TaxPortion
    {
        return new TaxPortionModel(
            $this->name,
            $this->rate,
            $this->amount instanceof TypedMoneyBuilder ? $this->amount->build() : $this->amount
        );
    }

    public static function of(): TaxPortionBuilder
    {
        return new self();
    }
}
