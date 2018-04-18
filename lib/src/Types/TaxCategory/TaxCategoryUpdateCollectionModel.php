<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TaxCategoryUpdateCollectionModel extends UpdateCollectionModel implements TaxCategoryUpdateCollection {

    /**
     * @param TaxCategoryUpdate $value
     * @return TaxCategoryUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategoryUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategoryUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategoryUpdate) {
            $data = $this->mapData(TaxCategoryUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
