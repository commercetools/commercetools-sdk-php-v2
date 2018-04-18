<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TaxCategoryChangeNameActionCollectionModel extends TaxCategoryUpdateActionCollectionModel implements TaxCategoryChangeNameActionCollection {

    /**
     * @param TaxCategoryChangeNameAction $value
     * @return TaxCategoryChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategoryChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategoryChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategoryChangeNameAction) {
            $data = $this->mapData(TaxCategoryChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
