<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

use Commercetools\Types\Common\Money;

class CartSetCartTotalTaxActionModel extends CartUpdateActionModel implements CartSetCartTotalTaxAction {
    const DISCRIMINATOR_VALUE = 'setCartTotalTax';

    /**
     * @var Money
     */
    protected $externalTotalGross;
    /**
     * @var TaxPortionCollection
     */
    protected $externalTaxPortions;

    /**
     * @return Money
     */
    public function getExternalTotalGross()
    {
        if (is_null($this->externalTotalGross)) {
            $value = $this->raw(CartSetCartTotalTaxAction::FIELD_EXTERNAL_TOTAL_GROSS);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->externalTotalGross = $value;
        }
        return $this->externalTotalGross;
    }
    /**
     * @return TaxPortionCollection
     */
    public function getExternalTaxPortions()
    {
        if (is_null($this->externalTaxPortions)) {
            $value = $this->raw(CartSetCartTotalTaxAction::FIELD_EXTERNAL_TAX_PORTIONS);
            if (is_null($value)) {
                return $this->mapData(TaxPortionCollection::class, null);
            }
            $value = $this->mapData(TaxPortionCollection::class, $value);
            $this->externalTaxPortions = $value;
        }
        return $this->externalTaxPortions;
    }

    /**
     * @param Money $externalTotalGross
     * @return $this
     */
    public function setExternalTotalGross(Money $externalTotalGross)
    {
        $this->externalTotalGross = $externalTotalGross;

        return $this;
    }
    /**
     * @param TaxPortionCollection $externalTaxPortions
     * @return $this
     */
    public function setExternalTaxPortions(TaxPortionCollection $externalTaxPortions)
    {
        $this->externalTaxPortions = $externalTaxPortions;

        return $this;
    }

}
