<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetCustomTypeActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetCustomTypeActionCollection {

    /**
     * @param CategorySetCustomTypeAction $value
     * @return CategorySetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetCustomTypeAction) {
            $data = $this->mapData(CategorySetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
