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
 * @implements Builder<TaxedItemPrice>
 */
final class TaxedItemPriceBuilder implements Builder
{
    /**

     * @var null|CentPrecisionMoney|CentPrecisionMoneyBuilder
     */
    private $totalNet;

    /**

     * @var null|CentPrecisionMoney|CentPrecisionMoneyBuilder
     */
    private $totalGross;

    /**

     * @var null|CentPrecisionMoney|CentPrecisionMoneyBuilder
     */
    private $totalTax;

    /**
     * <p>Total net amount of the Line Item or Custom Line Item.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getTotalNet()
    {
        return $this->totalNet instanceof CentPrecisionMoneyBuilder ? $this->totalNet->build() : $this->totalNet;
    }

    /**
     * <p>Total gross amount of the Line Item or Custom Line Item.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getTotalGross()
    {
        return $this->totalGross instanceof CentPrecisionMoneyBuilder ? $this->totalGross->build() : $this->totalGross;
    }

    /**
     * <p>Total tax applicable for the Line Item or Custom Line Item.
     * Automatically calculated as the difference between the <code>totalGross</code> and <code>totalNet</code> values.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getTotalTax()
    {
        return $this->totalTax instanceof CentPrecisionMoneyBuilder ? $this->totalTax->build() : $this->totalTax;
    }

    /**
     * @param ?CentPrecisionMoney $totalNet
     * @return $this
     */
    public function withTotalNet(?CentPrecisionMoney $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @param ?CentPrecisionMoney $totalGross
     * @return $this
     */
    public function withTotalGross(?CentPrecisionMoney $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @param ?CentPrecisionMoney $totalTax
     * @return $this
     */
    public function withTotalTax(?CentPrecisionMoney $totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * @deprecated use withTotalNet() instead
     * @return $this
     */
    public function withTotalNetBuilder(?CentPrecisionMoneyBuilder $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @deprecated use withTotalGross() instead
     * @return $this
     */
    public function withTotalGrossBuilder(?CentPrecisionMoneyBuilder $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @deprecated use withTotalTax() instead
     * @return $this
     */
    public function withTotalTaxBuilder(?CentPrecisionMoneyBuilder $totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    public function build(): TaxedItemPrice
    {
        return new TaxedItemPriceModel(
            $this->totalNet instanceof CentPrecisionMoneyBuilder ? $this->totalNet->build() : $this->totalNet,
            $this->totalGross instanceof CentPrecisionMoneyBuilder ? $this->totalGross->build() : $this->totalGross,
            $this->totalTax instanceof CentPrecisionMoneyBuilder ? $this->totalTax->build() : $this->totalTax
        );
    }

    public static function of(): TaxedItemPriceBuilder
    {
        return new self();
    }
}
