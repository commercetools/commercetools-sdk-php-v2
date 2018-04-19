<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryUpdateCollectionModel extends UpdateCollectionModel implements CategoryUpdateCollection
{

    /**
     * @param CategoryUpdate $value
     * @return CategoryUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryUpdate) {
            $data = $this->mapData(CategoryUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
