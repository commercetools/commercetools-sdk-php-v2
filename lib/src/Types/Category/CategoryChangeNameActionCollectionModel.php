<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryChangeNameActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategoryChangeNameActionCollection {

    /**
     * @param CategoryChangeNameAction $value
     * @return CategoryChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryChangeNameAction) {
            $data = $this->mapData(CategoryChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
