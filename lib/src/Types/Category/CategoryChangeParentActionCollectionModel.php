<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategoryChangeParentActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategoryChangeParentActionCollection {

    /**
     * @param CategoryChangeParentAction $value
     * @return CategoryChangeParentActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryChangeParentAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryChangeParentAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryChangeParentAction) {
            $data = $this->mapData(CategoryChangeParentAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
