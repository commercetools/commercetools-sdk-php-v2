<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionModel;

class TaxCategoryRemoveTaxRateActionModel extends TaxCategoryUpdateActionModel implements TaxCategoryRemoveTaxRateAction {
    const DISCRIMINATOR_VALUE = 'removeTaxRate';

    /**
     * @var string
     */
    protected $taxRateId;

    /**
     * @return string
     */
    public function getTaxRateId()
    {
        if (is_null($this->taxRateId)) {
            $value = $this->raw(TaxCategoryRemoveTaxRateAction::FIELD_TAX_RATE_ID);
            $value = (string)$value;
            $this->taxRateId = $value;
        }
        return $this->taxRateId;
    }

    /**
     * @param string $taxRateId
     * @return $this
     */
    public function setTaxRateId(string $taxRateId)
    {
        $this->taxRateId = (string)$taxRateId;

        return $this;
    }

}
