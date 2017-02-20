<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategoryAddTaxRateAction extends TaxCategoryUpdateAction {
    protected $taxRate;
    const DISCRIMINATOR_VALUE = 'addTaxRate';

    /**
     * @return TaxRateDraft
     */
    public function getTaxRate(): TaxRateDraft
    {
        if (is_null($this->taxRate)) {
            $value = $this->raw('taxRate');
            if (!is_null($value)) {
                $this->taxRate = Mapper::map($value, TaxRateDraft::class);
            } else {
                return Mapper::map([], TaxRateDraft::class);
            }
        }
        return $this->taxRate;
    }
                
}
