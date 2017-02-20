<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategoryRemoveTaxRateAction extends TaxCategoryUpdateAction {
    protected $taxRateId;
    const DISCRIMINATOR_VALUE = 'removeTaxRate';

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
                
}
