<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TaxCategoryReplaceTaxRateActionCollectionModel extends TaxCategoryUpdateActionCollectionModel implements TaxCategoryReplaceTaxRateActionCollection {

    /**
     * @param TaxCategoryReplaceTaxRateAction $value
     * @return TaxCategoryReplaceTaxRateActionCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategoryReplaceTaxRateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategoryReplaceTaxRateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategoryReplaceTaxRateAction) {
            $data = $this->mapData(TaxCategoryReplaceTaxRateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
