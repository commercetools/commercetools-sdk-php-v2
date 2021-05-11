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
 * @implements Builder<CustomLineItemTaxedPrice>
 */
final class CustomLineItemTaxedPriceBuilder implements Builder
{
    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $totalNet;

    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $totalGross;

    /**
     * @return null|TypedMoney
     */
    public function getTotalNet()
    {
        return $this->totalNet instanceof TypedMoneyBuilder ? $this->totalNet->build() : $this->totalNet;
    }

    /**
     * @return null|TypedMoney
     */
    public function getTotalGross()
    {
        return $this->totalGross instanceof TypedMoneyBuilder ? $this->totalGross->build() : $this->totalGross;
    }

    /**
     * @param ?TypedMoney $totalNet
     * @return $this
     */
    public function withTotalNet(?TypedMoney $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @param ?TypedMoney $totalGross
     * @return $this
     */
    public function withTotalGross(?TypedMoney $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @deprecated use withTotalNet() instead
     * @return $this
     */
    public function withTotalNetBuilder(?TypedMoneyBuilder $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @deprecated use withTotalGross() instead
     * @return $this
     */
    public function withTotalGrossBuilder(?TypedMoneyBuilder $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    public function build(): CustomLineItemTaxedPrice
    {
        return new CustomLineItemTaxedPriceModel(
            $this->totalNet instanceof TypedMoneyBuilder ? $this->totalNet->build() : $this->totalNet,
            $this->totalGross instanceof TypedMoneyBuilder ? $this->totalGross->build() : $this->totalGross
        );
    }

    public static function of(): CustomLineItemTaxedPriceBuilder
    {
        return new self();
    }
}
