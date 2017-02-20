<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategoryReplaceTaxRateAction extends TaxCategoryUpdateAction {
    protected $taxRateId;
    protected $taxRate;
    const DISCRIMINATOR_VALUE = 'replaceTaxRate';

    /**
     * @return string
     */
    public function getTaxRateId(): string
    {
        if (is_null($this->taxRateId)) {
            $value = $this->raw('taxRateId');
            if (!is_null($value)) {
                $this->taxRateId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->taxRateId;
    }
                

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
