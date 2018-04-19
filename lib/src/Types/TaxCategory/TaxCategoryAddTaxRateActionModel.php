<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionModel;

class TaxCategoryAddTaxRateActionModel extends TaxCategoryUpdateActionModel implements TaxCategoryAddTaxRateAction
{
    const DISCRIMINATOR_VALUE = 'addTaxRate';

    /**
     * @var TaxRateDraft
     */
    protected $taxRate;

    /**
     * @return TaxRateDraft
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            $value = $this->raw(TaxCategoryAddTaxRateAction::FIELD_TAX_RATE);
            if (is_null($value)) {
                return $this->mapData(TaxRateDraft::class, null);
            }
            $value = $this->mapData(TaxRateDraft::class, $value);

            $this->taxRate = $value;
        }
        return $this->taxRate;
    }

    /**
     * @param TaxRateDraft $taxRate
     * @return $this
     */
    public function setTaxRate(TaxRateDraft $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

}
