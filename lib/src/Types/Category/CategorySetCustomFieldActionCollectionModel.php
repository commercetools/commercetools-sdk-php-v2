<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySetCustomFieldActionCollectionModel extends CategoryUpdateActionCollectionModel implements CategorySetCustomFieldActionCollection {

    /**
     * @param CategorySetCustomFieldAction $value
     * @return CategorySetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySetCustomFieldAction) {
            $data = $this->mapData(CategorySetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
