<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetKeyActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetKeyActionCollection {

    /**
     * @param CategorySetKeyAction $value
     * @return CategorySetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetKeyAction) {
            $data = $this->mapData(CategorySetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
