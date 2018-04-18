<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryReferenceCollectionModel extends ReferenceCollectionModel implements CategoryReferenceCollection {

    /**
     * @param CategoryReference $value
     * @return CategoryReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryReference) {
            $data = $this->mapData(CategoryReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
