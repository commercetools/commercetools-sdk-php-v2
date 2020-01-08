<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxedItemPriceDraft>
 */
final class TaxedItemPriceDraftBuilder implements Builder
{
    /**
     * @var Money|?MoneyBuilder
     */
    private $totalNet;

    /**
     * @var Money|?MoneyBuilder
     */
    private $totalGross;

    /**
     * @return null|Money
     */
    public function getTotalNet()
    {
        return $this->totalNet instanceof MoneyBuilder ? $this->totalNet->build() : $this->totalNet;
    }

    /**
     * @return null|Money
     */
    public function getTotalGross()
    {
        return $this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross;
    }

    /**
     * @return $this
     */
    public function withTotalNet(?Money $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalGross(?Money $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalNetBuilder(?MoneyBuilder $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalGrossBuilder(?MoneyBuilder $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    public function build(): TaxedItemPriceDraft
    {
        return new TaxedItemPriceDraftModel(
            ($this->totalNet instanceof MoneyBuilder ? $this->totalNet->build() : $this->totalNet),
            ($this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross)
        );
    }

    public static function of(): TaxedItemPriceDraftBuilder
    {
        return new self();
    }
}
