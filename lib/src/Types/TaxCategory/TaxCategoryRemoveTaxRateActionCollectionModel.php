<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TaxCategoryRemoveTaxRateActionCollectionModel extends TaxCategoryUpdateActionCollectionModel implements TaxCategoryRemoveTaxRateActionCollection {

    /**
     * @param TaxCategoryRemoveTaxRateAction $value
     * @return TaxCategoryRemoveTaxRateActionCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategoryRemoveTaxRateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategoryRemoveTaxRateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategoryRemoveTaxRateAction) {
            $data = $this->mapData(TaxCategoryRemoveTaxRateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
