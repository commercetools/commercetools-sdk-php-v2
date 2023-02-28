<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CentPrecisionMoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
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

     * @var null|CentPrecisionMoney|CentPrecisionMoneyBuilder
     */
    private $amount;

    /**
     * <p>Name of the tax portion.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>A number in the range 0-1.</p>
     *

     * @return null|float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * <p>Money value of the tax portion.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getAmount()
    {
        return $this->amount instanceof CentPrecisionMoneyBuilder ? $this->amount->build() : $this->amount;
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
     * @param ?CentPrecisionMoney $amount
     * @return $this
     */
    public function withAmount(?CentPrecisionMoney $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @deprecated use withAmount() instead
     * @return $this
     */
    public function withAmountBuilder(?CentPrecisionMoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): TaxPortion
    {
        return new TaxPortionModel(
            $this->name,
            $this->rate,
            $this->amount instanceof CentPrecisionMoneyBuilder ? $this->amount->build() : $this->amount
        );
    }

    public static function of(): TaxPortionBuilder
    {
        return new self();
    }
}
