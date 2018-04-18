<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TaxCategoryAddTaxRateActionCollectionModel extends TaxCategoryUpdateActionCollectionModel implements TaxCategoryAddTaxRateActionCollection {

    /**
     * @param TaxCategoryAddTaxRateAction $value
     * @return TaxCategoryAddTaxRateActionCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategoryAddTaxRateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategoryAddTaxRateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategoryAddTaxRateAction) {
            $data = $this->mapData(TaxCategoryAddTaxRateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
