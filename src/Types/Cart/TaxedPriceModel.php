<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\Money;

class TaxedPriceModel extends JsonObjectModel implements TaxedPrice {
    /**
     * @var Money
     */
    protected $totalNet;
    /**
     * @var Money
     */
    protected $totalGross;
    /**
     * @var TaxPortionCollection
     */
    protected $taxPortions;

    /**
     * @return Money
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            $value = $this->raw(TaxedPrice::FIELD_TOTAL_NET);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->totalNet = $value;
        }
        return $this->totalNet;
    }
    /**
     * @return Money
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            $value = $this->raw(TaxedPrice::FIELD_TOTAL_GROSS);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->totalGross = $value;
        }
        return $this->totalGross;
    }
    /**
     * @return TaxPortionCollection
     */
    public function getTaxPortions()
    {
        if (is_null($this->taxPortions)) {
            $value = $this->raw(TaxedPrice::FIELD_TAX_PORTIONS);
            if (is_null($value)) {
                return $this->mapData(TaxPortionCollection::class, null);
            }
            $value = $this->mapData(TaxPortionCollection::class, $value);
            $this->taxPortions = $value;
        }
        return $this->taxPortions;
    }

    /**
     * @param Money $totalNet
     * @return $this
     */
    public function setTotalNet(Money $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }
    /**
     * @param Money $totalGross
     * @return $this
     */
    public function setTotalGross(Money $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }
    /**
     * @param TaxPortionCollection $taxPortions
     * @return $this
     */
    public function setTaxPortions(TaxPortionCollection $taxPortions)
    {
        $this->taxPortions = $taxPortions;

        return $this;
    }

}
