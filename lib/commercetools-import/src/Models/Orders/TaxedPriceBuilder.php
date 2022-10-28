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
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\MoneyBuilder;
use stdClass;

/**
 * @implements Builder<TaxedPrice>
 */
final class TaxedPriceBuilder implements Builder
{
    /**

     * @var null|Money|MoneyBuilder
     */
    private $totalNet;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $totalGross;

    /**

     * @var ?TaxPortionCollection
     */
    private $taxPortions;

    /**
     * <p>Maps to <code>TaxedPrice.totalNet</code>.</p>
     *

     * @return null|Money
     */
    public function getTotalNet()
    {
        return $this->totalNet instanceof MoneyBuilder ? $this->totalNet->build() : $this->totalNet;
    }

    /**
     * <p>Maps to <code>TaxedPrice.totalGross</code>.</p>
     *

     * @return null|Money
     */
    public function getTotalGross()
    {
        return $this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross;
    }

    /**
     * <p>Maps to <code>TaxedPrice.taxPortions</code>.</p>
     *

     * @return null|TaxPortionCollection
     */
    public function getTaxPortions()
    {
        return $this->taxPortions;
    }

    /**
     * @param ?Money $totalNet
     * @return $this
     */
    public function withTotalNet(?Money $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @param ?Money $totalGross
     * @return $this
     */
    public function withTotalGross(?Money $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @param ?TaxPortionCollection $taxPortions
     * @return $this
     */
    public function withTaxPortions(?TaxPortionCollection $taxPortions)
    {
        $this->taxPortions = $taxPortions;

        return $this;
    }

    /**
     * @deprecated use withTotalNet() instead
     * @return $this
     */
    public function withTotalNetBuilder(?MoneyBuilder $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @deprecated use withTotalGross() instead
     * @return $this
     */
    public function withTotalGrossBuilder(?MoneyBuilder $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    public function build(): TaxedPrice
    {
        return new TaxedPriceModel(
            $this->totalNet instanceof MoneyBuilder ? $this->totalNet->build() : $this->totalNet,
            $this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross,
            $this->taxPortions
        );
    }

    public static function of(): TaxedPriceBuilder
    {
        return new self();
    }
}
