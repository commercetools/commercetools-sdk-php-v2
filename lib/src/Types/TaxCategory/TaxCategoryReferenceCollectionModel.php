<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TaxCategoryReferenceCollectionModel extends ReferenceCollectionModel implements TaxCategoryReferenceCollection
{

    /**
     * @param TaxCategoryReference $value
     * @return TaxCategoryReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategoryReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategoryReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategoryReference) {
            $data = $this->mapData(TaxCategoryReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
