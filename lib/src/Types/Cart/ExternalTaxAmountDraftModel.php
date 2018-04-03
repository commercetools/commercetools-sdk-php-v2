<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\Money;

class ExternalTaxAmountDraftModel extends JsonObjectModel implements ExternalTaxAmountDraft {
    /**
     * @var Money
     */
    protected $totalGross;
    /**
     * @var ExternalTaxRateDraft
     */
    protected $taxRate;

    /**
     * @return Money
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            $value = $this->raw(ExternalTaxAmountDraft::FIELD_TOTAL_GROSS);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->totalGross = $value;
        }
        return $this->totalGross;
    }
    /**
     * @return ExternalTaxRateDraft
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            $value = $this->raw(ExternalTaxAmountDraft::FIELD_TAX_RATE);
            if (is_null($value)) {
                return $this->mapData(ExternalTaxRateDraft::class, null);
            }
            $value = $this->mapData(ExternalTaxRateDraft::class, $value);

            $this->taxRate = $value;
        }
        return $this->taxRate;
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
     * @param ExternalTaxRateDraft $taxRate
     * @return $this
     */
    public function setTaxRate(ExternalTaxRateDraft $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

}
